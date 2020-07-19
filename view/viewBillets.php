<?php
//On inclut le fichier dont on a besoin
require_once('model/Manager.php');

//On inclu le fichier article.php
require_once('model/billetsManager.php');
?>

<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<!--Texte de présentation page d'accueil-->
<section class="page-accueil mb-0" id="about">
    <div class="container">
        <div class="row">
            <div class="col text_acceuil text-white">
                <h3>Billet simple pour l'Alaska</h3>
                <p>Bienvenue sur mon blog Billet simple pour l'Alaska, l'idée de ce blog est d'y mettre chaque semaine
                    un chapitre de mon roman, pour que vous puissiez le lire mais aussi le commenter.
                    N'hésitez pas à me laisser un commentaire, j'y répondrais avec plaisir.
                </p>
            </div>
        </div>
    </div>
</section>

<!--Affichage des différents billets-->
<section class="page-accueil-cards" id="card">
    <div class="container">
        <div class="row">
        <?php foreach($billets as $billet)//On parcourt $billets, la valeur de l'item courant est copié dans $billet
        {
        ?>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?=htmlspecialchars($billet->image());?>" alt="chapitre 1">
                    <div class="card-body">
                        <h5 class="card-title"><?=htmlspecialchars($billet->title());?></h5>
                        <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet->author());?></h6>
                        <p class="card-text"><?=$billet->content();?></p>
                        <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet->date_creation());?></h6>
                        <a href="index.php?action=billet&id=<?= $billet->id(); ?>" class="btn btn-primary">Lire ce chapitre</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<?php
$db = new \App\Model\Manager();
$db->dbConnect();
?>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

