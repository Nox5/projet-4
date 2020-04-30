<?php
namespace Projet4\Blog\Billet;

class Billet
{
    //Fonction qui me permet d'afficher les billets du blog
    public function getBillets()
    {
        $db = new \Projet4\Blog\Manager\Manager();
        $bdd = $db->dbConnect();
        $result = $bdd->query('SELECT id, title, content, author, date_creation FROM billets ORDER BY id DESC');

        return $result;
    }
    //Fonction qui me permets d'afficher un billet spécifiquement
    public function getBillet($id)
    {
        $db = new \Projet4\Blog\Manager\Manager();
        $connection = $db->dbConnect();
        $result = $connection->prepare('SELECT id, title, content, author, date_creation FROM billets WHERE id = ?');

        $result->execute(array($id));

        return $result;
    }
}