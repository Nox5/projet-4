<?php
function listComments()
{
    $commentManager = new \Projet4\Blog\commentManager\commentManager();//Création de l'objet
    $comments = $commentManager->getComments($id);//Appel d'une fonction de cet objet

    require('view/viewBillet.php');
}