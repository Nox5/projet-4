<?php 
namespace App\Controller;

require_once('model/bdd.php');
require_once('model/postsManager.php');
require_once('model/commentManager.php');

use \App\Model\Billet;
use \App\Model\CommentManager;
class BilletController
{
// affiche la liste des billet
    public function listBillets()
    {
        $billetManager = new Billet();//Création de l'objet
        $billets = $billetManager->getBillets();//Appel d'une fonction de cet objet

        require('view/viewBillets.php');
    }

// Affiche un billet et ses commentaires
    public function billet()
    {
        $billetManager = new Billet();//Création de l'objet
        $billet = $billetManager->getBillet($_GET['id']);

        $commentManager = new CommentManager();
        $resultComments = $commentManager->getComments($_GET['id']);
        require('view/viewBillet.php');
    }

// Ajoute un billet
    public function addBillet()
    {
        if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content']) && !empty($_POST['image']))
        {

            $billetManager = new Billet();
            $results = $billetManager->createBillet($_POST['title'], $_POST['author'], $_POST['content'], $_POST['image']);
            $this->listBillets();
        }
        else
        {
            echo 'Tous les champs ne sont pas remplis !';
        }
    }

// Modifie un billet
    public function submitUpdate($id)
    {
        $submitUpdate = new Billet();

        if (!empty($_POST['title']) && !empty($_POST['content']))
        {
            $submitUpdate->updateBillet($_POST['title'], $_POST['content'], $_GET['id']);
            $this->listBillets();
        }
        else
        {
            $billet = $submitUpdate->getBillet($id);
            require('view/updateView.php');
        }
    }

// Supprime un billet
    public function suprBillet($id)
    {
        $delete = new Billet();
        $delete->deleteBillet($id);

        $this->listBillets();
    }
}