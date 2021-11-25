<?php 

require_once('../model/Contat.class.php');

$contact = new Contact($_POST['nom_message'],$_POST['prenom_message'], $_POST['email_message'],$_POST['sujet_message'],$_POST['message_message']);

$contact->ajouter();
header("Location:../contact.php?resultat=oui");
//exit();
?>