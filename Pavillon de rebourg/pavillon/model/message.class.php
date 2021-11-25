<?php
class Message{


private $nom_message ;
private $prenom_message ;
private $email_message ;
private $sujet_message ;
private $message_message ;
                

function __construct( $nom_message="",$prenom_message="",$email_message="",$sujet_message="",$message_message=""){
$this->nom_message = $nom_message;
$this->prenom_message = $prenom_message;

$this->email_message = $email_message;

$this->sujet_message = $sujet_message;

$this->message_message = $message_message;


}

public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `message_contact`(`nom_message`, `prenom_message`, `email_message`, `sujet_message`, `message_message`)		 VALUES ('$this->nom_message','$this->prenom_message','$this->email_message','$this->sujet_message','$this->message_message')");
		
	       //return FALSE;
	}


			



}



?>