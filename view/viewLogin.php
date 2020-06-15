<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>


<div class="headercommentaires container-fluid">
    <div class="row">
        <div class="col-lg-4 mr-auto">
        <h2>Se connecter</h2>
        </div>
    </div>
</div>


<div class ="container">
    <div class="row">
        <div class="col-12">
            <form action="index.php?action=connexionLogin" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="pseudo" name="username" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>