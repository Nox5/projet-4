<?php
namespace App\Model;//Classe dans ce namespace

require_once('model/manager.php');
require_once('model/modelPost.php');

use \App\Model\Manager;
use \App\Model\Post;
class CommentManager
{
// Récupère les commentaires sous un billet
    public function getComments($id_billet)
    {
        $db = new Manager();
        $bdd = $db->dbConnect();
        $comment = $bdd->prepare('SELECT id, author, content, date_content, signalement FROM comments WHERE id_billet = ? ORDER BY date_content DESC');
 
        $comment->execute(array($id_billet));//On execute la requête préparée

        $array = array();//On créer un tableau vide pour récupérer chaque entrée.
        //On assigne à une variable le résultat du tableau puis on fetch pour récupérer chaque entrée du jeu pdo
        while($resultComment = $comment->fetch())//On boucle sur sur chaque résultat
        {
            $post = new Post();
            $post->hydrate($resultComment);
            $array[] = $post;//A chaque fin de boucle on stock la valeur dans le tableau
        }

        return $array;//On récupere ce tableau de valeurs
    }

// Récupère les commentaires signalés
    public function getCommentsSignaler()
    {
        $db = new Manager();
        $bdd = $db->dbConnect();
        $comment = $bdd->prepare('SELECT id, author, content, date_content, id_billet, signalement FROM comments WHERE signalement = 1 ORDER BY date_content DESC');
 
        $comment->execute();//On execute la requête préparée

        $array = array();//On créer un tableau vide pour récupérer chaque entrée.
        //On assigne à une variable le résultat du tableau puis on fetch pour récupérer chaque entrée du jeu pdo
        while($resultComment = $comment->fetch())//On boucle sur sur chaque résultat
        {
            $post = new Post();
            $post->hydrate($resultComment);
            $array[] = $post;//A chaque fin de boucle on stock la valeur dans le tableau
        }
        return $array;//On récupere ce tableau de valeurs
    }


// Légitimer un commentaires
public function commentLegitime($id)
{
    $db = new Manager();
    $bdd = $db->dbConnect();
    $comment = $bdd->prepare('UPDATE comments SET signalement = 0 WHERE id = ?');

    $comment->execute(array($id));//On execute la requête préparée
}


// Récupérer un commentaire
    public function getComment($id)
    {
        $db = new Manager();
        $bdd = $db->dbConnect();

        $comment = $bdd->prepare('SELECT id, author, content, date_content, signalement, id_billet FROM comments WHERE id = ? ORDER BY date_content DESC');
        $comment->execute(array($id));

        $data = $comment->fetch(\PDO::FETCH_ASSOC);

        $post = new Post();
        $post->hydrate($data);

        return $post;
    }

// Poster un commentaire
    public function postComments($id, $author, $content)
    {
        $db = new Manager();
        $bdd = $db->dbConnect();

        $comments = $bdd->prepare('INSERT INTO comments(id_billet, author, content, date_content) VALUES(?, ?, ?, NOW())');
        $comments->execute(array($id, $author, $content));

        return $comments;
    }

// Signaler un commentaire
    public function commentReport($id)
    {
        $db = new Manager();
        $bdd = $db->dbConnect();

        $reportComment = $bdd->prepare('UPDATE comments SET signalement = 1 WHERE id = ?');
        $reportComment->execute(array($id));
    }

// Supprimer un commentaire
    public function deleteComment($id)
    {
        $db = new Manager();
        $bdd = $db->dbConnect();

        $delete = $bdd->prepare('DELETE FROM comments WHERE id = ?');
        $deleteComment = $delete->execute(array($id));

        return $deleteComment;
    }
}
