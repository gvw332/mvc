<?php
// Gère toutes les fonctions qui concernent les actualités
class Controller_Actualites extends Controller{   
    // Elle retourne en fonction du niveau admin ou pas toutes les actualités ou seulement celles mises en ligne
    public function actualites(){
        $actualites  = new model_actualites;
        $session = new Session;
        Session::checkLogin();

        if (!Session::$is_admin) {
            $actualites = $actualites->find(
                array(
                    'enligne' => 1,
                )
            );
        } else {
            $actualites = $actualites->all();
        }
        $ma_page_actualites = new View('actualites');
        $actualites['titre'] = 'Actualités';

        $ma_page_actualites->render($actualites);
    }
    // Permet d'éditer un enregistrement d'actualité 
    public function update(){
       
        $session = new Session();


        $_SESSION['actu-update'] = true;

        if (count($_POST) == 1) {
            $id = (int) $_POST['id'];
            $actualite  = new model_actualites;
            
            $detail = $actualite->find(
                array(
                    'id' =>  $id,
                )
            );
            $_SESSION['reload'] = (array)$detail[0];
        }
        unset($_POST);

        $myView = new View('updateactualites');
        $myView->render();
        exit;
    }
    // Permet de sauvegarder les données dans la table actualites 
    public function save(){
        $session = new Session;
        Session::checkLogin();
       
        $_SESSION['actu-save'] = true;
        $_POST['contenu'] = str_replace("\r\n", "<br>", $_POST['contenu']);
        $filenames = [];
        // vérifie si on a choisit un fichier média 
        if (isset($_FILES['medias'])) { 
            $filename = $_FILES['medias']['name'];
            $tempname = $_FILES['medias']['tmp_name'];
            $folder = FOLDER_MEDIAS;           
            move_uploaded_file($tempname, $folder . $filename);         
        }
        // on gère la case à cocher du formulaire 
        if (isset($_POST['enligne'])) {
            $_POST['enligne'] = 1;
        } else {
            $_POST['enligne'] = 0;
        }
        // on valide le formulaire
        $validation = new Validation($_POST);

        $validation->cleaning()
            ->required('titre', 'contenu');

        $errors = $validation->getErrors();
        $data = $validation->getData();

        if (isset($_SESSION['reload'])) unset($_SESSION['reload']);      
        if (!empty($errors)) {
            // Affiche les erreurs ou effectue une action en cas d'erreur
            $session->setFlash($errors);       
            $_SESSION['reload'] = $data;       
            $session->render("actu-update");
        }

        $data['medias'] = $filename;
        if (empty($data['medias'])) {
            unset($data['medias']);
        }
        $actualite  = new model_actualites;
       
        unset($_POST);
        $actualite->save($data);
      
        $session->setFlash('Actualité bien sauvegardée', 'success');      

        $session->render("actualites");
  
        exit;
    }
    // Permet de supprimer les données dans la table actualites 
    public function delete($id){
        // Suppression de l' actualité et retour sur la page actualites.php
        $actualite  = new model_actualites;
        $actualite -> delete($id);
        $session = new Session();
        $session -> render("actualites");
    }
}