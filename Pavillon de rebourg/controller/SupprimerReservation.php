<?php
session_start();
  

require_once('../Model/Reservation.class.php');

$reservation= new Reservation('','','','');
$reservation->supprimer($_GET['id']);

header("location: ../liste_des_reservations.php?resultat=oui");
exit();

?>