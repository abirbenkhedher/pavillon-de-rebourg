<?php
class Admin{
  
private $nom_admin;
private $prenom_admin;
private $login_admin;
private $email_admin;
private $motdepasse_admin;
private $type_admin;

function __construct($nom_admin,$prenom_admin,$login_admin,$email_admin,$motdepasse_admin,$type_admin){
$this->nom_admin = $nom_admin;
$this->prenom_admin = $prenom_admin;
$this->login_admin = addslashes($login_admin);
$this->email_admin = $email_admin;
$this->motdepasse_admin = md5($motdepasse_admin);
$this->type_admin = $type_admin;

}

public function ajouter(){ 

include('../include/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM administrateur WHERE login_admin LIKE '$this->login_admin'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `administrateur`(`nom_admin`,`prenom_admin`,`login_admin`, `email_admin`, `motdepasse_admin`,`type_admin`) VALUES ('$this->nom_admin','$this->prenom_admin','$this->login_admin','$this->email_admin','$this->motdepasse_admin','$this->type_admin')");
		
		echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../include/connect_db.php');

      
      $id = $_GET['id'];

        $r=$bdd->exec ("UPDATE `administrateur` SET `nom_admin`='$this->nom_admin',`prenom_admin`='$this->prenom_admin',`login_admin`='$this->login_admin',`email_admin`='$this->email_admin',`motdepasse_admin`='$this->motdepasse_admin',`type_admin`='$this->type_admin' WHERE id_admin=$id");
				
        
        echo'oui';
        
 		}	
			
public function supprimer(){ 
    

  include('../include/connect_db.php');//.. maaneha okhrj mil dossier hedha w odkhel lil includ

    $req = $bdd->exec('DELETE FROM administrateur WHERE id_admin=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>