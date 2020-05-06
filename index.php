<?php
require('controller/postController.php');
//L'index.php qui est le chef d'orchestre (le routeur) c'est la première page que l'on appelle.
try
{
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'listBillets')
        {
            listBillets();
        }
        elseif ($_GET['action'] == 'billet')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                billet();
            }
            else
            {
                //Erreur on arrête tout, on envoie une exception donc on saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else
    {
        listBillets();
    }
}
catch(Exception $e)
{
    echo 'Erreur : ' .$e->getMessage();
}
