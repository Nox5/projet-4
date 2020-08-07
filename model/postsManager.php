<?php
namespace App\Model;

require_once("model/bdd.php");
require_once("model/modelArticle.php");

use PDO;
use \App\Model\Bdd;
use \App\Model\Article;

class Billet extends Bdd//Manager
{
// Fonction qui me permet d'afficher les billets du blog
    public function getBillets()
    {
        $db = new Bdd();
        $bdd = $db->dbConnect();
        $result = $bdd->query('SELECT id, title, content, author, date_creation, image FROM billets ORDER BY id DESC');

        $array = array();

        while($resultBillet = $result->fetch())
        {
            $billet = new Article();
            $billet->hydrate($resultBillet);
            $array[]= $billet;//Permet d'ajouter une valeur dans un tableau
        }

        return $array;
    }

// Fonction qui me permet d'afficher un seul billet
    public function getBillet($id)
    {
        $db = new Bdd();
        $connection = $db->dbConnect();
        $result = $connection->prepare('SELECT id, title, content, author, date_creation FROM billets WHERE id = ?');

        $result->execute(array($id));

        $billet = $result->fetch(PDO:: FETCH_ASSOC);

        $article = new Article();
        $article->hydrate($billet);

        $billet = $article;

        return $billet;

    }

// Fonction qui permet de créer un nouveau billet
    public function createBillet($title, $author, $content, $image)
    {
        $db = new Bdd();
        $connection = $db->dbConnect();

        $result = $connection->prepare('INSERT INTO billets (title, author, content, image, date_creation) VALUES (?, ?, ?, ?, NOW())');
        $result->execute(array($title, $author, $content, $image));

        return $result;
    }

// Fonction qui permet de modifier un billet
    public function updateBillet($title, $content, $id)
    {
        $db = new Bdd();
        $connection = $db->dbConnect();

        $updateBillet = $connection->prepare('UPDATE billets SET title = ?, content = ? WHERE id = ?');
        $updateBillet->execute(array($title, $content, $id));

        return $updateBillet;
    }

// Fonction qui permet de supprimer un billet
    public function deleteBillet($id)
    {
        $db = new Bdd();
        $connection = $db->dbConnect();

        $delete = $connection->prepare('DELETE FROM billets WHERE id = ?');

        $delete->execute(array($id));

        return $delete;
    }
}