<?php
namespace App\Model;

use PDO;

require_once("model/Manager.php");
require_once("model/modelArticle.php");

class Billet extends Manager//Manager
{

    //Fonction qui me permet d'afficher les billets du blog
    public function getBillets()
    {
        $db = new \App\Model\Manager();
        $bdd = $db->dbConnect();
        $result = $bdd->query('SELECT id, title, content, author, date_creation, image FROM billets ORDER BY id DESC');

        $array = array();

        while($resultBillet = $result->fetch())
        {
            $billet = new \App\Model\Article();
            $billet->hydrate($resultBillet);
            $array[]= $billet;//Permet d'ajouter une valeur dans un tableau
        }

        return $array;
    }
    //Fonction qui me permet d'afficher un billet spécifiquement
    public function getBillet($id)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();
        $result = $connection->prepare('SELECT id, title, content, author, date_creation FROM billets WHERE id = ?');

        $result->execute(array($id));

        $billet = $result->fetch(PDO:: FETCH_ASSOC);

        $article = new \App\Model\Article();
        $article->hydrate($billet);

        $billet = $article;

        return $billet;

    }

    //Fonction qui permet de créer un nouveau billet
    public function createBillet($title, $author, $content, $image)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();

        $result = $connection->prepare('INSERT INTO billets (title, author, content, image, date_creation) VALUES (?, ?, ?, ?, NOW())');
        $result->execute(array($title, $author, $content, $image));
        //$c_msg = "<span style='color:green'>Votre message a bien été posté</span>";
        return $result;
    }

    public function deleteBillet($id)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();

        $delete = $connection->prepare('DELETE FROM billets WHERE id = ?');

        $delete->execute(array($id));

        return $delete;
    }
}