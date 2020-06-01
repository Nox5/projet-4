<?php 
namespace App\Controller;

require_once('model/Manager.php');
require_once('model/billetsManager.php');
require_once('model/commentManager.php');

class BilletController
{
    public function listBillets()
    {

    $billetManager = new \App\Model\Billet();//Création de l'objet

    $billets = $billetManager->getBillets();//Appel d'une fonction de cet objet

    require('view/viewBillets.php');
    }

    public function billet()
    {
    $billetManager = new \App\Model\Billet();//Création de l'objet
    $billet = $billetManager->getBillet($_GET['id']);
    //$delete = $billetManager->deleteBillet($_GET['id']);
    require('view/viewBillet.php');
    }

    public function addBillet()
    {
        if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['image']) && !empty($_POST['content']))
        {
            $billetManager = new \App\Model\Billet();
            $billetManager->createBillet($_POST['title'], $_POST['content'], $_POST['author'], $_POST['image']);

            require('view/viewBillets.php');
        }
        else
        {
            require('view/createBilletView.php');
            //throw new Exception('Tous les champs ne sont pas remplis');
        }
    }

    public function suprBillet($id)
    {
        $delete = new \App\Model\Billet();
        $delete->deleteBillet($id);

        require('view/viewBillets.php');
    }
}