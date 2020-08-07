<?php
namespace App\Controller;

require_once('model/bdd.php');
require('model/usersManager.php');
//require('model/commentManager.php');

use \App\Model\UsersManager;
use \App\Model\CommentManager;

class AdminController
{
   public function connexionLogin()
   {
        if (isset($_POST) && !empty($_POST))
        {
            $user = null;

            if (!empty(htmlspecialchars($_POST['username'])) && !empty($_POST['password']))
            {
                $login = new UsersManager();
                $user = $login->testConnexion();
            }


            if (is_array($user))
            {
                $_SESSION['identifiant'] = array(
                    'user' => $_POST['username'],
                );

                header('Location: index.php?action=dashboard');
                die();
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

    public function dashboard()
    {
        $commentManager = new CommentManager();
        $comment = $commentManager->getCommentsSignaler();

        require('view/viewAdmin.php');
    }

    public function deconnexion()
    {
        $_SESSION = array();
        session_destroy();

        header('Location:index.php');
    }
}