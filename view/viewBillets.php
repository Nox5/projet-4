<?php
//On inclut le fichier dont on a besoin
require_once('model/Manager.php');

//On inclu le fichier article.php
require_once('model/billetsManager.php');
?>

<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>


<!--Texte de présentation page d'accueil-->
<section class="page-accueil text-white mb-0" id="about">
    <div class="container">
        <!--Titre de la page d'accueil-->
        <h3 class="page-accueil-titre text-center text-white">Billet simple pour l'Alaska</h3>
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Bienvenue sur mon blog <span class="titre-roman-accueil">Billet simple pour l'Alaska</span>, l'idée de ce blog est d'y mettre chaque semaine
                    un chapitre de mon roman, pour que vous puissiez le lire mais aussi le commenter.
                </p>
            </div>

            <div class="col-lg-4 mr-auto">
                <p class="lead">N'hésitez pas à me donner vos avis j'y répondrais avec plaisir.</p>
                <span class="signature">Jean Forteroche</span>
            </div>
        </div>
    </div>
</section>

<?php
$billet = new \Projet4\Blog\Model\Billet();
$billets = $billet->getBillets();
while($billet = $billets->fetch())
{
?>
<!--Affichage des différents billets-->
    <section class="page-accueil-cards" id="card">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?=htmlspecialchars($billet['image']);?>" alt="chapitre 1">
                        <div class="card-body">
                            <h5 class="card-title"><?=htmlspecialchars($billet['title']);?></h5>
                            <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet['author']);?></h6>
                            <p class="card-text"><?=htmlspecialchars($billet['content']);?></p>
                            <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet['date_creation']);?></h6>
                            <a href="index.php?action=billet&amp;id=<?= $billet['id'] ?>" class="btn btn-primary">Lire ce chapitre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}

$db = new \Projet4\Blog\Model\Manager();
$db->dbConnect();
?>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

