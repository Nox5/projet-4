<?php
namespace App\Model;//Classe dans ce namespace

require_once('model/manager.php');

class commentManager
{
    public function getComments($id_billet)
    {
        $db = new \App\Model\Manager();
        $bdd = $db->dbConnect();
        $comments = $bdd->prepare('SELECT id, author, content, date_content FROM comments WHERE id_billet = ? ORDER BY date_content DESC');
        $comments->execute(array($id_billet));

        return $comments;
    }

    public function postComments($id, $author, $content)
    {
        $db = new \App\Model\Manager();
        $bdd = $db->dbConnect();

        $comments = $bdd->prepare('INSERT INTO comments(id_billet, author, content, date_content) VALUES(?, ?, ?, NOW())');
        $comments->execute(array($id, $author, $content));

        return $comments;
    }
}
