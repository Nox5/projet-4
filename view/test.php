<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    //echo password_hash('test', PASSWORD_DEFAULT, ['cost' => 14]);
    var_dump(password_verify('test', '$2y$14$I.VdxEjdOHPNDr5/FRGvX.9JuteMIl0lxurpfRsWjz1OQP4R.jVO.'));

    $password = '$2y$14$I.VdxEjdOHPNDr5/FRGvX.9JuteMIl0lxurpfRsWjz1OQP4R.jVO.';
    if (!empty($_POST['login']) && !empty($_POST['pass']))
    {
        if ($_POST['login'] === 'admin' && password_verify($_POST['pass'], $password))
        {
            session_start();
            $_SESSION['connecte'] = 1;
            echo 'vous etes connecté';

        }
        else
        {
            echo "Identifiants incorrects";
        }
    }


?>
    <p>page public</p>

    <form action="test.php" method="POST">
        <label for="login">Login </label><input type="text" name="login" /><br />
        <label for="pass">Mot de passe </label><input type="password" name="pass" /><br />
        <input type="submit" value="ENVOYER" />
    </form>


</body>
</html>

