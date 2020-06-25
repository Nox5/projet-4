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

        $commentManager = new \App\Model\commentManager();
        $resultComments = $commentManager->getComments($_GET['id']);

        require('view/viewBillet.php');
    }

    public function addBillet()
    {
        if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content']) && !empty($_POST['image']))
        {

            $billetManager = new \App\Model\Billet();
            $results = $billetManager->createBillet($_POST['title'], $_POST['author'], $_POST['content'], $_POST['image']);
            $this->listBillets();
        }
        else
        {
            require('view/createBilletView.php');
        }
    }

    public function suprBillet($id)
    {
        $delete = new \App\Model\Billet();
        $delete->deleteBillet($id);

        $this->listBillets();
    }
}