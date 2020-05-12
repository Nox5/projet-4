
<?php $title = 'Chapitre'; ?>

<?php ob_start(); ?>

<section id="read-billet">
    <div class="container_billet container">
        <div class="background_billet row">
            <div col-lg-4 mr-auto>
                <h3><?=htmlspecialchars($billet['title']) ?></h3>
                <h4><?=nl2br(htmlspecialchars($billet['author'])) ?></h4>
                <p><?=htmlspecialchars($billet['content']) ?></p>
                <em><?= nl2br($billet['date_creation']) ?></em>
            </div>
        </div>
    </div>
</section>

<section id="read-comments">
    <div class="container_comments container">
        <div col-lg-4 mr-auto>
            <h2>Ajouter un commentaire</h2>
            <form action="index.php?action=addComment&amp;id=<?= $billet['id'] ?>" method="post">
                <div>
                    <label for="author">Pseudo</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment"></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php');?>
