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
            <button type="button" class="btn btn-primary" href = "index.php?action=addBillet">Ajouter un article</button>
        </div>
        <h2>Commentaires signalés :</h2>
        <h2>Utilisateurs :</h2>
    </div>
</section>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>