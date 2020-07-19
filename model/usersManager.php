<?php
namespace App\Model;

require_once('model/Manager.php');

use \App\Model\Manager;
class UsersManager extends Manager
{
   public function testConnexion()
   {
        $connexion = new Manager();
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