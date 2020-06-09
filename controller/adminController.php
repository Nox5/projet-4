<?php
namespace App\Controller;

require_once('model/Manager.php');
require('model/usersManager.php');

class adminController
{
   public function connexionLogin()
   {
       //On verifie si les variables username et password sont déclarés
       if (!empty($_POST['username']) && !empty($_POST['password']))
       {
           echo session_save_path();
           //sauvegarder l'utilisateur en session
            session_start();

            $login = new \App\Model\UsersManager();
            $user = $login->testConnexion();
            //On enregistre le login de session
            $_SESSION['user'] =  $user;
            //rediriger vers la page après le login (administration...)
            header('Location: view/viewAdmin.php');

            if ($user === false)
            {
                echo 'Identifiants inconnus';
                header('Location: index.php');
            }
            var_dump($user);
       }
       //Sinon on envoi vers le formulaire
       else
       {
           require('view/viewLogin.php');
       }
   }
}