<?php
//On inclut le fichier dont on a besoin
require('model/Manager.php');

//On inclu le fichier article.php
require('model/billetsManager.php');
?>

<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>
<h1>Jean Forteroche</h1>
<p>Blog en construction</p>

<?php
$billet = new \Projet4\Blog\Billet\Billet();
$billets = $billet->getBillets();
while($billet = $billets->fetch())
{
?>
    <div>
        <h3><?=htmlspecialchars($billet['title']);?></h3>
        <p><?=htmlspecialchars($billet['content']);?></p>
        <p><?=htmlspecialchars($billet['author']);?></p>
        <p><?=htmlspecialchars($billet['date_creation']);?></p>
    </div>
    <br />
<?php
}

$db = new \Projet4\Blog\Manager\Manager();
$db->dbConnect();
?>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>