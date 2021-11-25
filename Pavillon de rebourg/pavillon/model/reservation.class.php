<?php
class Reservation{
private $id_client;
private $id_annonce;
private $date_debut;

private $date_fin;


                

function __construct($id_client="",$id_annonce="",$date_debut="",$date_fin=""){
$this->id_client = $id_client;
$this->id_annonce = $id_annonce;

$this->date_debut =$date_debut;

$this->date_fin = $date_fin;



}

public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `reservation`(`id_client`, `id_annonce`, `date_debut`, `date_fin`) VALUES ('$this->id_client','$this->id_annonce','$this->date_debut','$this->date_fin')");
		
	       //return FALSE;
	}


			



}



?>