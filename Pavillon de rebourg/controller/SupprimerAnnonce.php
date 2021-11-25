<?php
require_once('../model/Annonce.class.php');
$annonce = new Annonce($_POST['titre_annonce'],$_POST['prix_annonce'],$_POST['image_annonce'],$_POST['description_annonce']);
$annonce->supprimer(); 

header("location:../liste_des_annonces.php?resultat=oui");
//exit();
?>