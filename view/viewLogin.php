<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<div class ="container">
    <h3>Connexion</h3>
    <form action="index.php?action=connexionLogin" method="POST">
        <div class="form-group">
            <label for="username">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="username" placeholder="Entrez votre pseudo">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>