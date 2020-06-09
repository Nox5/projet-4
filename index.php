<?php
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
        elseif ($_GET['action'] === 'addBillet')
        {
                $billetController = new \App\Controller\BilletController();
                $billetController->addBillet();
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
            //if (isset($_POST) && !empty($_POST))
            //{
                $connexionLog = new \App\Controller\adminController();
                $connexionLog->connexionLogin();
            //}
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
