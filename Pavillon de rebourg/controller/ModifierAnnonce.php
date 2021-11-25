
<?php
require_once('../Model/Annonce.class.php');


    $annonce = new Annonce($_POST['titre_annonce'],$_POST['prix_annonce'],$_POST['image_annonce'],$_POST['description_annonce']);
    $annonce->modifier();
    header("location:../liste_des_annonces.php?resultat=oui");
//exit();


?>


