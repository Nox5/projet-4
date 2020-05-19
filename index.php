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
        elseif ($_GET['action'] === 'addBillet')
        {
            if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['image']) && !empty($_POST['content']))
            {
                addBillet();
                header('Location: index.php?action=addBillet&id=' .$id);
            }
            else
            {
                throw new Exception('Tous les champs ne sont pas remplis');

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
