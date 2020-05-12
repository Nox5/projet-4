<?php
require('controller/postController.php');
require('controller/commentController.php');
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
        elseif ($_GET['action'] == 'addComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                if (!empty($_POST['author']) && !empty($_POST['comment']))
                {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else
                {
                    echo 'Erreur : tous les champs ne sont pas remplis !';
                }
            }
            else
            {
                echo 'Erreur : aucun identifiant de billet envoyé';
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