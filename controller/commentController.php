<?php
require_once('model/commentManager.php');

function addComment($id, $author, $content)
{
    $commentManager = new \Projet4\Blog\Model\commentManager();
    $affectedLines = $commentManager->postComment($id, $author, $content);

    if ($affectedLines === false)
    {
        die('Impossible d\'ajouter le commentaire  !');
    }
    else
    {
        header('Location: index.php?action=comment&id=' . $id);
    }
}