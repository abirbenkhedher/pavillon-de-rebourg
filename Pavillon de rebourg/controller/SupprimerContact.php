<?php
require_once('../pavillon/model/Contat.class.php');
$contact = new Contact($_POST['nom_message'],$_POST['prenom_message'],$_POST['email_message'],$_POST['sujet_message'],$_POST['message_message']);
$contact->supprimer(); 

header("location:../liste_des_contactes.php?resultat=oui");
//exit();
?>