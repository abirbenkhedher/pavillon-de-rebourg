<?php
class Contact{
private $nom;
private $prenom;
private $email;
private $subject;
private $message;


function __construct($nom,$prenom,$email,$subject,$message){
$this->nom = addslashes($nom);
$this->prenom = addslashes($prenom);
$this->email = addslashes($email);
$this->subject = addslashes($subject);
$this->message = addslashes($message);

}

public function ajouter(){ 

include('../include/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `message_contact`(`nom_message`, `prenom_message`, `email_message`, `sujet_message`,`message_message`)	
		VALUES ('$this->nom','$this->prenom','$this->email','$this->subject','$this->message')");	
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
      //return TRUE;

}

public function supprimer(){ 
    

  include('../include/connect_db.php');//.. maaneha okhrj mil dossier hedha w odkhel lil includ
    $req = $bdd->exec('DELETE FROM message_contact WHERE id_message=\''.$_GET['id'].'\''); 
		echo'oui';	


}
}
?>