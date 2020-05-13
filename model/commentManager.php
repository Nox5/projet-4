<?php
namespace Projet4\Blog\commentManager;//Classe dans ce namespace

require_once('model/manager.php');

class commentManager extends manager
{
    public function getComments($id_billet)
    {
        $db = new \Projet4\Blog\Manager\Manager();
        $bdd = $db->dbConnect();
        $comments = $bdd->prepare('SELECT id, author, content, date_content, DATE_FORMAT(date_content \'%d\%m\Y à %Hh%imin%ss\')
        AS date_content_fr FROM comments WHERE id_billet = ? ORDER BY date_content DESC');
        $comments->execute(array($id_billet));

        return $comments;
    }
}