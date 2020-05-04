<?php
namespace Projet4\Blog\Manager;

class Manager
{
    //Les constantes
    const DB_HOST = 'mysql:host=localhost;dbname=blogforteroche;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    //Fonction qui me permet de me connecter à la base de donnée.
    public function dbConnect()
    {
        $bdd = new \PDO(self::DB_HOST,self:: DB_USER,self::DB_PASS);
        $bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $bdd;
    }
    

    /*public function getConnect()
    {
        //Tentative de connexion à la base de données
        try
        {
            
        }
        //On léve une erreur si la connexion échoue
        catch(Exception $e)
        {
            die('Erreur :' .$e->getMessage());
        }
    }*/
}
