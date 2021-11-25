<?php
session_start();
  

require_once('../model/client.class.php');
 $nom_client = $_POST["nom_client"];
 $prenom_client = $_POST["prenom_client"];
 $email_client = $_POST["email_client"];
 $motdepasse_client = $_POST["motdepasse_client"];
 $tel_client = $_POST["tel_client"];
 $adresse_client = $_POST["adresse_client"];


$client= new Client($nom_client , $prenom_client,$email_client,$motdepasse_client,$tel_client,$adresse_client);
$client->ajouter();





header("location:../comfirmation_compte.php");
    

//exit();
?>
