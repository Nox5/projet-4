<?php
session_start();
require('controller/postController.php');
require('controller/commentController.php');
require('controller/adminController.php');
//L'index.php qui est le chef d'orchestre (le routeur) c'est la première page que l'on appelle.
try
{
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'listBillets')
        {
            $billetsController = new \App\Controller\BilletController();
            $billetsController->listBillets();
        }
        elseif ($_GET['action'] == 'billet')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                $billetsController = new \App\Controller\BilletController();
                $billetsController->billet();
            }
            else
            {
                //Erreur on arrête tout, on envoie une exception donc on saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                if (!empty($_POST['author']) && !empty($_POST['content']))
                {
                    $addComment = new \App\Controller\commentController();
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
        elseif ($_GET['action'] === 'addBillet')
        {
            //Je veux savoir si une connection est existante
            //if (isset($_SESSION['connecte']))
            //{
                $billetController = new \App\Controller\BilletController();
                $billetController->addBillet();
            //}
        }
        elseif ($_GET['action'] === 'deleteBillet')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                //throw new Exception("id du billet manquant");
                $billetController = new \App\Controller\BilletController();
                $billetController->suprBillet($_GET['id']);
            }
        }
        elseif ($_GET['action'] === 'connexionLogin')
        {
            $connexionLog = new \App\Controller\adminController();
            $connexionLog->connexionLogin();
        }
    }
    else
    {
        $billets = new \App\Controller\BilletController;
        $billets->listBillets();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' .$e->getMessage();
}
