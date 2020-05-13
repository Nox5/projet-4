<?php 
require_once('model/Manager.php');
require_once('model/billetsManager.php');
require_once('model/commentManager.php');

function listBillets()
{
    $billetManager = new Projet4\Blog\Model\Billet();//Création de l'objet
    $billets = $billetManager->getBillets();//Appel d'une fonction de cet objet

    require('view/viewBillets.php');
}

function billet()
{
    $billetManager = new Projet4\Blog\Model\Billet();//Création de l'objet
    $billet = $billetManager->getBillet($_GET['id']);
    $commentManager = new \Projet4\Blog\commentManager\commentManager();//Création de l'objet
    $comments = $commentManager->getComments($billet['id']);//Appel d'une fonction de cet objet

    require('view/viewBillet.php');
}