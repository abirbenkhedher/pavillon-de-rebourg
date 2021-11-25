<?php
class Reservation{
private $id_client;
private $id_annonce;
private $date_debut;

private $date_fin;


                

function __construct($id_client="",$id_annonce="",$date_debut="",$date_fin=""){
$this->id_client = $id_client;
$this->id_annonce = $id_annonce;

$this->date_debut = $date_debut;

$this->date_fin = $date_fin;



}

public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `reservation`(`id_client`, `id_annonce`, `date_debut`, `date_fin`) VALUES ('$this->id_client','$this->id_annonce','$this->date_debut','$this->date_fin')");
		
	       //return FALSE;
	}


    public function modifier($id){ 

    include('../include/connect_db.php');

       
      
       
        $r=$bdd->exec("UPDATE `reservation` SET `confirm`=1  WHERE id_reservation=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer($id){ 
    
	include('../include/connect_db.php');

    $req = $bdd->exec('DELETE FROM reservation WHERE id_reservation=\''.$id.'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>