<?php 
require_once('model/Manager.php');
require_once('model/billetsManager.php');

function listBillets()
{
    $billetManager = new Projet4\Blog\Billet\Billet();//Création de l'objet
    $billets = $billetManager->getBillets();//Appel d'une fonction de cet objet

    require('view/viewBillets.php');
}

function billet()
{
    $billetManager = new Projet4\Blog\Billet\Billet();//Création de l'objet
    $billet = $billetManager->getBillet($_GET['id']);

    require('view/viewBillet.php');
}