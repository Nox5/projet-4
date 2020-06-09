<?php
namespace App\Model;


require_once("model/Manager.php");

class Billet//Manager
{
    //Fonction qui me permet d'afficher les billets du blog
    public function getBillets()
    {
        $db = new \App\Model\Manager();
        $bdd = $db->dbConnect();
        $result = $bdd->query('SELECT id, title, content, author, date_creation, image FROM billets ORDER BY id DESC');

        return $result;
    }
    //Fonction qui me permet d'afficher un billet spécifiquement
    public function getBillet($id)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();
        $result = $connection->prepare('SELECT id, title, content, author, date_creation FROM billets WHERE id = ?');

        $result->execute(array($id));

        $billet = $result->fetch();

        return $billet;

    }

    //Fonction qui permet de créer un nouveau billet
    public function createBillet($title, $content, $author, $image)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();
        $result = $connection->prepare('INSERT INTO billets (title, content, author, image, date_creation) VALUES (?, ?, ?, ?, NOW())');

        $result->execute(array($title, $content, $author, $image));

        return $result;
    }

    public function deleteBillet($id)
    {
        $db = new \App\Model\Manager();
        $connection = $db->dbConnect();
        $delete = $connection->prepare('DELETE FROM billets WHERE id = ?');

        $delete->execute(array($id));
        //return $delete;
    }
}