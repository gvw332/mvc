<?php

// Va gérer toutes les commandes possibles et les actions associées
class Routeur{    
    // Structure de l'application basée sur les tables de la base de données   
    private $request;
    private $routes = [
  
       

        "connexion"      => ['controller' => 'Controller_Connexion', 'method' => 'connexion'],
        "connexion.ctrl" => ['controller' => 'Controller_Connexion', 'method' => 'connexion_ctrl'],
        "deconnexion"    => ['controller' => 'Controller_Connexion', 'method' => 'deconnexion'],

        "mdp-demande"      => ['controller' => 'Controller_Mdp', 'method' => 'mdp_demande'],
        "mdp-demande.ctrl" => ['controller' => 'Controller_Mdp', 'method' => 'mdp_demande_ctrl'],
        "nouveau-mdp"      => ['controller' => 'Controller_Mdp', 'method' => 'nouveau_mdp'],
        "nouveau-mdp.ctrl" => ['controller' => 'Controller_Mdp', 'method' => 'nouveau_mdp_ctrl'],

        "inscription"      => ['controller' => 'Controller_Utilisateur', 'method' => 'inscription'],
        "inscription.ctrl" => ['controller' => 'Controller_Utilisateur', 'method' => 'inscription_ctrl'],
        "delete.account" => ['controller' => 'Controller_Utilisateur', 'method' => 'delete_account'],

        "admin"        => ['controller' => 'Controller_Utilisateur', 'method' => 'admin'],
        "admin.delete" => ['controller' => 'Controller_Utilisateur', 'method' => 'delete'],
        "admin.update" => ['controller' => 'Controller_Utilisateur', 'method' => 'update'],
        "admin.save"   => ['controller' => 'Controller_Utilisateur', 'method' => 'save'],



    ];
    // Cette fonction interragit avec l'index.php pour récupérer tout ce qu'on écrit dans la barre de navigation en localhost
    public function __construct($request){
        $this->request = $request;
    }
    // Extrait la route de la demande
    public function getRoute(){ 
        $elements = explode('/', $this->request);
        return $elements[0];
    }
    // Récupère les paramètres de la demande 
    public function getParams(){
        $params = null;
        $elements = explode('/', $this->request);

        unset($elements[0]);

        for ($i = 1; $i < count($elements); $i++) {
            $params[$elements[$i]] = $elements[$i + 1];
            $i++;
        }
        if ($_POST) {
            foreach ($_POST as $key => $val) {
                $params[$key] = $val;
            }
        }
        if (!isset($params)) $params = null;
        return $params;
    }
    // Analyse les paramètres et va dans les contrôleurs et les méthodes si la route et paramètre existent
    public function renderController(){
        $route  = $this->getRoute();
        $params = $this->getParams();

        if (key_exists($route, $this->routes)) {
            $controller = $this->routes[$route]['controller'];
            $method     = $this->routes[$route]['method'];

            $currentController = new $controller;
            $currentController->$method($params);
        } else {
            $myView = new View('404');
            $myView->render();
        }
    }
}