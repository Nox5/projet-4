<?php
//On inclut le fichier dont on a besoin
require('../model/Manager.php');

//On inclu le fichier article.php
require('../model/billetsManager.php');
?>

<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<!--Texte de présentation page d'accueil-->
<section class="page-accueil text-black mb-0" id="about">
    <div class="container">
        <!--Titre de la page d'accueil-->
        <h3 class="page-accueil-titre text-center text-black">Billet simple pour l'Alaska</h3>
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
$billet = new \Projet4\Blog\Billet\Billet();
$billets = $billet->getBillets();
while($billet = $billets->fetch())
{
?>
<!--Affichage des différents billets-->
    <section class="page-accueil-cards" id="card">
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/01/16/15/26/humpback-whale-1984341_1280.jpg" alt="chapitre 1">
                    <div class="card-body">
                        <h5 class="card-title"><?=htmlspecialchars($billet['title']);?></h5>
                        <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet['author']);?></h6>
                        <p class="card-text"><?=htmlspecialchars($billet['content']);?></p>
                        <h6 class="card-subtitle mb-2"><?=htmlspecialchars($billet['date_creation']);?></h6>
                        <a href="#" class="btn btn-primary">Lire ce chapitre</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php
}

$db = new \Projet4\Blog\Manager\Manager();
$db->dbConnect();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>