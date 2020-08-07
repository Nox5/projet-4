<?php
session_start();

require_once('controller/postController.php');
require_once('controller/commentController.php');
require_once('controller/adminController.php');

use \App\Controller\BilletController;
use \App\Controller\CommentController;
use \App\Controller\AdminController;
// Fonction qui permet de savoir si un utilisateur est connecté
function isLogged ()
{
    if (isset($_SESSION['identifiant']['user']))
    {
        return true;
    }
    else
    {
        return false;
    }
}
//L'index.php qui est le chef d'orchestre (le routeur) c'est la première page que l'on appelle.
try
{
//-----------------------------------------------------------------------------
//                            Blog visible pour tous
//-----------------------------------------------------------------------------
    if (isset($_GET['action']))
    {
// Affichage des billets en page d'accueil
        if ($_GET['action'] == 'listBillets')
        {
            $billetsController = new BilletController();
            $billetsController->listBillets();
        }
// Affichage d'un seul billet et les commentaires
        elseif ($_GET['action'] == 'billet')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                $billetsController = new BilletController();
                $billetsController->billet();
            }
            else
            {
                //Erreur on arrête tout, on envoie une exception donc on saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
// Ajouter un commentaire
        elseif ($_GET['action'] == 'addComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                if (!empty($_POST['author']) && !empty($_POST['content']))
                {
                    $addComment = new CommentController();
                    $addComment->addComment($_GET['id'], $_POST['author'], $_POST['content']);
                }
                else
                {
                    echo 'Erreur : tous les champs ne sont pas remplis !';
                }
            }
            else
            {
                echo 'Erreur : aucun id de billet envoyé';
            }
        }
// Signaler un commentaire
        else if ($_GET['action'] === 'report')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                $reportComment = new CommentController();
                $reportComment->reportComment($_GET['id']);
            }
        }
//-----------------------------------------------------------------------------
//                            Connexion
//-----------------------------------------------------------------------------
// Connexion
        elseif ($_GET['action'] === 'connexionLogin')
        {
            $connexionLog = new AdminController();
            $connexionLog->connexionLogin();
        }
// Deconnexion
        elseif ($_GET['action'] === 'deconnexion')
        {
            $deconnexion = new AdminController();
            $deconnexion->deconnexion();
        }

//-----------------------------------------------------------------------------
//                            Administration
//-----------------------------------------------------------------------------
// Ajouter un billet
        elseif ($_GET['action'] === 'addBillet')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
                $billetController = new BilletController();
                $billetController->addBillet();
        }
// Modifier un billet
        elseif ($_GET['action'] === 'submitUpdate')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
            $postController = new BilletController();
            $postController->submitUpdate($_GET['id']);
        }
// Supprimer un billet
        elseif ($_GET['action'] === 'deleteBillet')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                $billetController = new BilletController();
                $billetController->suprBillet($_GET['id']);
            }
        }
// Supprimer un commentaire
        elseif ($_GET['action'] === 'deleteComment')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
            $commentController = new CommentController();
            $commentController->deleteComment($_GET['id']);
        }
        elseif ($_GET['action'] === 'dashboard')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
            $admin = new AdminController();
            $admin->dashboard();
        }
        elseif ($_GET['action'] === 'legitime')
        {
            if (!isLogged())
            {
                throw new Exception('Vous n\'étes pas connecté !');
            }
            $commentController = new CommentController();
            $commentController->legitimeComment($_GET['id']);
        }
    }
    else
    {
        $billets = new BilletController;
        $billets->listBillets();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' .$e->getMessage();
}