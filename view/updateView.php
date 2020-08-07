<?php $title = 'update billet'; ?>

<?php ob_start(); ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="texte_modification_billet col-4">
            <h5>Modification du billet</h5>
        </div>
    </div>
    <div class="bordure"></div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="header_nouveau_billet col-4">
            <p><a href="index.php" class="btn btn-outline-dark">Retour à la liste des billets</a></p>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="formulaire_nouveau_billet col">
            <form action="index.php?action=submitUpdate&id=<?= $_GET['id'] ?>" method="post">
                <input type="hidden" name="post_id" value="<?= $billet->id() ?>" />
                <div>
                <label for="title">Titre :</label><input type="text" id="title" name="title" value="<?= htmlspecialchars($billet->title()); ?>" />
                </div><br />
                <div>
                    <textarea id="content" name="content"><?= $billet->content(); ?></textarea>
                </div>
                <div><br />
                    <button type="submit" class="btn btn-outline-dark">Valider les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>