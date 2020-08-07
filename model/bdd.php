<?php
namespace App\Model;

class Bdd
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
}
