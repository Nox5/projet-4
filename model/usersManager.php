<?php
namespace App\Model;


require_once('model/Manager.php');

class UsersManager extends Manager
{
   public function testConnexion()
   {
        $connexion = new \App\Model\Manager();
        $db = $connexion->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $req->execute([
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ]);
        $user = $req->fetch();

        return $user;
   }
}