<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<?php $title = 'Administartion'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text_welcome_administration"><?='Bonjour ' . $_SESSION['identifiant']['user'] . ' bienvenue dans l\'interface d\'administration' ;?>
            <div class="bordure"></div>
        </div>
    </div>
</div>

<?php
foreach($comment as $comments)
{
?>
<section>
    <div class="tableau_administration container-fluid">
        <div class="row">
            <div class="col">
                <h5>Commentaires signalés</h5>
                <p>Auteur : <?= $comments->author() ?></p>
                <p>Massage : <?= $comments->content() ?></p>
                <p>Date :<?= $comments->date_content() ?></p>
                <a href="index.php?action=deleteComment&id= <?= $comments->id() ?>" class="btn btn-outline-dark">Supprimer</a>
                <a href="index.php?action=legitime&id= <?= $comments->id() ?> " class="btn btn-outline-dark">Légitime</a>
            </div>
        </div>
    </div>
</section>
<?php
}
?>

<section class="formulaire_administration">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h5>Nouvel article</h5><br />
                <form action="index.php?action=addBillet" method="post">
                    <div>
                        <label for="Titre">Titre :</label><input type="text" id="title" name="title" />
                    </div><br />
                    <div>
                        <label for="Titre">Auteur :</label><input type="text" id="author" name="author" />
                    </div><br />
                    <div>
                        <label for="Titre">Url image :</label><input type="text" id="image" name="image" />
                    </div><br />
                    <div>
                        <textarea id="content" name="content"></textarea>
                    </div><br />
                    <div>
                        <input type="submit"  class="btn btn-outline-dark" value="Poster ce nouveau chapitre" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>