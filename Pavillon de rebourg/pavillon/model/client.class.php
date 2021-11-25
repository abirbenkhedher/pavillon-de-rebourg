<?php
class Client{
private $nom_client;
private $prenom_client;
private $email_client;
private $motdepasse_client;
private $tel_client;
private $adresse_client;



                

function __construct($nom_client="",$prenom_client="",$email_client="",$motdepasse_client="",$tel_client="",$adresse_client=""){
$this->nom_client = $nom_client;
$this->prenom_client = $prenom_client;

$this->email_client = $email_client;

$this->motdepasse_client =md5( $motdepasse_client);

$this->tel_client = $tel_client;
$this->adresse_client = $adresse_client;


}

public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `client`(`nom_client`, `prenom_client`, `email_client`, `motdepasse_client`, `tel_client`, `adresse_client`) VALUES ('$this->nom_client','$this->prenom_client','$this->email_client','$this->motdepasse_client','$this->tel_client','$this->adresse_client')");
		
	       //return FALSE;
	}


			



}



?>