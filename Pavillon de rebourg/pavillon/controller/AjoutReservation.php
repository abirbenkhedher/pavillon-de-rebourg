<?php
session_start();
  

require_once('../model/Reservation.class.php');
$date_debut =date("Y-m-d",strtotime( $_POST["date1"]));
$id_annonce =(int) $_POST['id_annonce'];
$date_fin =date("Y-m-d",strtotime( $_POST["date2"]));
$user=(int)$_SESSION["id_client"];
$_SESSION["id_annonce"]=$id_annonce;
if ($user>0):
$reservation= new Reservation($user,$id_annonce,$date_debut,$date_fin);
$reservation->ajouter();

header("location:../comfirmation.php");
    
else:
    header("location:../login.php") ;
endif;
//exit();
?>