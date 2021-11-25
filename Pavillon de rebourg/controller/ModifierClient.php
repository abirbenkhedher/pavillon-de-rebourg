<?php
ob_start();
$id = $_GET['id'];
require_once('../model/Client.class.php');
$client = new Client($_POST['nom_client'],$_POST['prenom_client'],$_POST['email_client'],$_POST['tel_client'],$_POST['adresse_client']);
$client->modifier($id);

//header("location:../liste_des_clients.php?resultat=oui");
//exit();


?>