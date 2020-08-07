<?php
namespace App\Model;

require_once('model/bdd.php');

use \App\Model\Bdd;
class UsersManager extends Bdd
{
   public function testConnexion()
   {
        $connexion = new Bdd();
        $db = $connexion->dbConnect();

        $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $req->execute([
            'username' => $_POST['username'],
            'password' => hash('sha256', $_POST['password'])
        ]);

        $user = $req->fetch();

        return $user;
   }
}