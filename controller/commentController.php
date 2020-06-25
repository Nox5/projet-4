<?php
namespace App\Controller;

require_once('model/commentManager.php');

class commentController
{
    public function addComment($id, $author, $content)
    {
        $commentManager = new \App\Model\commentManager();
        $affectedLines = $commentManager->postComments($id, $author, $content);

        if ($affectedLines === false)
        {
            die('Impossible d\'ajouter le commentaire  !');
        }
        else
        {
            header('Location: index.php?action=billet&id=' . $_GET['id']);
        }
    }
}