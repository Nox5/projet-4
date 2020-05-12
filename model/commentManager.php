<?php
namespace Projet4\Blog\Model;// La classe est dans ce namspace

require_once('model/Manager.php');

class commentManager extends Manager
{
    function postComment($id, $author, $content)
    {
    $db = new \Projet4\Blog\Model\Manager();
    $bdd = $db->dbConnect();
    $comments = $bdd->prepare('INSERT INTO comments(id_billet, author, content, date_content) VALUES(?, ?, ?, NOW())');
    $comments->execute(array($id, $author, $content));

    return $comments;
    }
}
