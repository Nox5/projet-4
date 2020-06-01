<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<h2>Nouveau billet de blog</h2>
<form action="index.php?action=addBillet" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <label for="image">Image</label><br />
        <input type="text" id="image" name="image" />
    <div>
        <label for="content">Texte</label><br />
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<section id="newBillet">
    <div class="container">
        <div class="background_newBillet row">
            <div class="col-lg-4 mr-auto">
                <?php
                if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['image']) && !empty($_POST['content'])){
                ?>
                    <h4><?=htmlspecialchars($billet['title']) ?></h4>
                    <p><?=htmlspecialchars($billet['content']) ?></p>
                    <p><?=htmlspecialchars($billet['author']) ?></p>
                    <p><?=htmlspecialchars($billet['image']) ?></p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>