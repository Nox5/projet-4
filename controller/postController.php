<?php 
require_once('model/Manager.php');
require_once('model/billetsManager.php');
require_once('model/commentManager.php');

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
    $delete = $billetManager->deleteBillet($_GET['id']);

    require('view/viewBillet.php');
}

function addBillet()
{
    echo 'je suis dans le controller : ';
    $billetManager = new Projet4\Blog\Billet\Billet();
    $billet = $billetManager->createBillet($_POST['title'], $_POST['content'], $_POST['author'], $_POST['image']);

    require('view/createBilletView.php');
}
