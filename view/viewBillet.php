
<?php $title = 'Chapitre'; ?>

<?php ob_start(); ?>
<!--Affichage du billet-->
<section id="read-billet">
    <div class="container_billet container-fluid">
        <div class="background_billet row justify-content-between">
            <div col-lg-4 mr-auto>
                <h3><?=htmlspecialchars($billet['title']) ?></h3>
                <h4><?=nl2br(htmlspecialchars($billet['author'])) ?></h4>
                <p><?=htmlspecialchars($billet['content']) ?></p>
                <em><?= nl2br($billet['date_creation']) ?></em>
            </div>
            <div col-lg-4>
                <a href="index.php?action=deleteBillet&amp;id=<?=($billet['id'])?>" class="btn btn-outline-dark">Supprimer ce billet</a>
            </div>
        </div>
    </div>
</section>

<!--Affichage des commentaires liés au billet-->
<div class="headercommentaires container-fluid">
    <div class="row">
        <div class="col-lg-4 mr-auto">
        <h2>Commentaires</h2>
        </div>
    </div>
</div>

<?php 
while ($comment = $comments->fetch())
{
?>
<section id="read-comments">
    <div class="container_comments container">
        <div class="row justify-content-between">
            <div class="col-4">
                <p><strong><?= htmlspecialchars($comment['author']) ?></strong></p>
            </div>
            <div class="col-4">
                <p>Le : <?= $comment['date_content'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><?= $comment['content'] ?></p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-4">
                <button type="button" class="btn btn-primary" href = "index.php?action=addBillet">Signaler ce commentaire</button>
            </div>
        </div>
    </div>
</section>
<?php
}
?>

<!--Ajouter un commentaire au billet-->
<section id="add-comments">
    <div class="container_addcomment container-fluid">
        <div col-lg-4 mr-auto>
            <h2>Ajouter un commentaire</h2>
            <form action="index.php?action=addComment&id=<?= $billet['id'] ?>" method="post">
                <div>
                    <label for="author">Pseudo</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="content">Commentaire</label><br />
                    <textarea id="content" name="content"></textarea>
                </div>
                <div>
                <button class="btn btn-primary" type="submit">POSTER</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php');?>
