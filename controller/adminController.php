<?php
namespace App\Controller;

require_once('model/Manager.php');
require('model/usersManager.php');

class adminController
{
   public function connexionLogin()
   {
        if (isset($_POST) && !empty($_POST))
        {
            if (!empty(htmlspecialchars($_POST['username'])) && !empty(htmlspecialchars($_POST['password'])))
            {
                $login = new \App\Model\UsersManager();
                $user = $login->testConnexion();
                //var_dump($user);
            }
            if ($user)
            {
                $_SESSION['user'] =  $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                require('view/viewAdmin.php');
            }
            else
            {
                echo 'erreur identifiant';
            }
        }
        else
        {
            require('view/viewLogin.php');
        }
    }
}