<?php $title = 'Chapitre'; ?>

<?php ob_start(); ?>
<!--Affichage du billet-->
<section id="read-billet">
    <div class="container_billet container">
        <div class="background_billet row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3><?=htmlspecialchars($billet->title()) ?></h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?=nl2br(htmlspecialchars($billet->author()))?></h5>
                        <p><?= nl2br($billet->date_creation()) ?></p>
                        <p class="card-text"><?=$billet->content() ?></p>
                        <?php 
                        if (isLogged())
                        {
                        ?>
                            <a href="index.php?action=deleteBillet&amp;id=<?=$billet->id()?>" class="btn btn-outline-dark">Supprimer </a><br />
                            <a href="index.php?action=submitUpdate&amp;id=<?=$billet->id()?>" class="btn btn-outline-dark">modifier </a>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid">
    <div class="row">
        <div class="bouton_vue_billet col-4">
            <p><a href="index.php" class="btn btn-outline-dark">Retour à la liste des chapitres</a></p>
        </div>
    </div>
</div>


<!--Ajouter un commentaire au billet-->
<section id="add-comments">
    <div class="container_addcomment container-fluid">
        <div col-lg-4 mr-auto>
            <h5>Commentaires</h5>
            <div class="bordure"></div><br />
            <form action="index.php?action=addComment&id=<?= $billet->id() ?>" method="post">
                <div>
                    <label for="author">Pseudo : </label><input type="text" id="author" name="author" />
                </div><br />
                <div>
                    <textarea id="content" name="content"></textarea>
                </div><br />
                <div>
                <button class="btn btn-outline-dark" type="submit">POSTER</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php 
foreach($resultComments as $comments)
{
?>
<section id="read-comments">
    <div class="container_comments container">
        <div class="row justify-content-between">
            <div class="col-4">
                <p><strong><?= htmlspecialchars($comments->author()) ?></strong></p>
            </div>
            <div class="col-4">
                <p>Commenté le <?= $comments->date_content() ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><?= $comments->content()?></p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-4">
                <a type="button" href ="index.php?action=report&id= <?= $comments->id() ?>">Signaler </a><br />
            </div>
        </div>
    </div>
</section>
<?php
}
?>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php');?>
