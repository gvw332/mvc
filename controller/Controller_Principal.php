<?php
// Fonctions servant à appeler les pages qui n'ont pas de données provenant de la base de données (contrairement à actualités, connexion, contact, devis , mdp et utilisateur)
class Controller_Principal extends Controller{
    // Affichage de la page d'accueil
    public function Accueil(){
        $myView = new View('accueil');
        $titre['titre'] = 'Accueil';
        $myView->render($titre);
    }
    // Affichage de la page services
    public function Services(){
        $myView = new View('services');
        $titre['titre'] = 'Services';
        $myView->render($titre);
    }
}