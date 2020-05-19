
<?php $title = 'Chapitre'; ?>

<?php ob_start(); ?>

<section id="read-billet">
    <div class="container_billet container">
        <div class="background_billet row justify-content-between">
            <div col-lg-4 mr-auto>
                <h3><?=htmlspecialchars($billet['title']) ?></h3>
                <h4><?=nl2br(htmlspecialchars($billet['author'])) ?></h4>
                <p><?=htmlspecialchars($billet['content']) ?></p>
                <em><?= nl2br($billet['date_creation']) ?></em>
            </div>
            <div col-lg-4>
                <a href="index.php?billet&id" class="btn btn-outline-dark">Supprimer ce billet</a>
            </div>
        </div>
    </div>
</section>


<?php 
while ($comment = $comments->fetch())
{
?>
<section id="read-comments">
    <div class="container_comments container">
        <div class="background_comment row">
            <div col-lg-4 mr-auto>
                <p><strong><?= htmlspecialchars($comment['author']) ?></strong></p>
                <p><?= htmlspecialchars($comment['content']) ?></p>
                <p><?= $comment['date_content'] ?></p>
            </div>
        </div>
    </div>
</section>
<?php
}
?>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php');?>
