<?php
namespace App\Controller;

use \App\Model\CommentManager;

require_once('model/commentManager.php');

class CommentController
{
// Ajouter un commentaire
    public function addComment($id, $author, $content)
    {
        $commentManager = new CommentManager();
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

// Signaler un commentaire
    public function reportComment($id)
    {
        $commentManager = new CommentManager();
        $commentManager->commentReport($_GET['id']);

        $comment = $commentManager->getComment($_GET['id']);

        header('Location:index.php?action=billet&id=' . $comment->idBillet());
    }

// Supprimer un commentaire
    public function deleteComment($id)
    {
        $commentManager = new CommentManager();

        $deleteComment = $commentManager->deleteComment($_GET['id']);

        header('Location:index.php?action=dashboard');
    }

// Légitimer un commentaire
    public function legitimeComment($id)
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->commentLegitime($_GET['id']);

        header('Location:index.php?action=dashboard');
    }
}