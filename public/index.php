<?php

// Récupère l'url transformée et crée une request exécuter le routeur
include_once('../core/config.php');

MyAutoload::start();

if (isset($_GET['r'])) {
    $request = $_GET['r'];
    $routeur = new Routeur($request);
    $routeur->renderController();
} else {
    header('Location: ' . 'accueil');
}
