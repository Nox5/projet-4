<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<?php $title = 'Administartion'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Administration</h1>
            </div>

        </div>
        <div class="col-lg-4 mr-auto">
            <button type="button" class="btn btn-primary" href="index.php?action=addBillet">Ajouter un article</button>
        </div>
        <form action="index.php?action=addBillet" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="content">Texte</label><br />
        <textarea id="content" name="content"></textarea>
    </div>
        <label for="image">Image</label><br />
        <input type="text" id="image" name="image" />
    <div>
        <input type="submit" />
    </div>
</form>
        <div class="adminGestion">
            <h2>Commentaires signalés :</h2><br />
            <h2>Utilisateurs : <?= $_SESSION['user'] ?> </h2>
            <h2>Mot de passe : <?= $_SESSION['password'] ?></h2>
        </div>
    </div>
</section>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>