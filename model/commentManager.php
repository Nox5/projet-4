<?php
namespace App\Model;//Classe dans ce namespace

use PDO;

require_once('model/manager.php');
require_once('model/modelPost.php');

class commentManager
{
    public function getComments($id_billet)
    {
        $db = new \App\Model\Manager();
        $bdd = $db->dbConnect();
        $comment = $bdd->prepare('SELECT id, author, content, date_content FROM comments WHERE id_billet = ? ORDER BY date_content DESC');
 
        $comment->execute(array($id_billet));//On execute la requête préparée

        $array = array();//On créer un tableau vide pour récupérer chaque entrée.
        //On assigne à une variable le résultat du tableau puis on fetch pour récupérer chaque entrée du jeu pdo
        while($resultComment = $comment->fetch())//On boucle sur sur chaque résultat
        {
            $post = new \App\Model\Post();
            $post->hydrate($resultComment);
            $array[] = $post;//A chaque fin de boucle on stock la valeur dans le tableau
        }

        return $array;//On récupere ce tableau de valeurs
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
