<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>


<div class="page_connection_seconnecter container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <h5>Connexion</h5>
        </div>
    </div>
    <div class="bordure"></div>
</div><br />


<div class ="container">
    <div class="row">
        <div class="login col-4">
            <form action="index.php?action=connexionLogin" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="pseudo" name="username" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                </div>
                <button type="submit" class="btn btn-outline-dark">Valider</button>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>