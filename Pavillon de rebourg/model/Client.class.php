<?php
class Client{
  private $nom_client;
  private $prenom_client;
  private $email_client;
  private $tel_client;
  private $adresse_client;

  function __construct($nom_client,$prenom_client,$email_client,$tel_client,$adresse_client)
  {
  $this->nom_client = $nom_client;
  $this->prenom_client = $prenom_client;
  $this->email_client = $email_client;
  $this->tel_client = $tel_client;
  $this->adresse_client = $adresse_client;
  }

  public function ajouter()
  {
    include('../include/connect_db.php');

    $req = $bdd->query("SELECT * FROM client WHERE email_client LIKE '$this->email_client'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
    $req = $bdd->exec("INSERT INTO `client` ( `nom_client`, `prenom_client`, `email_client`, `tel_client`, `adresse_client`) VALUES ('$this->nom_client', '$this->prenom_client', '$this->email_client', '$this->tel_client', '$this->adresse_client')");
		
		echo'oui';
              //return TRUE;
    } else {
              echo'non';
              //return FALSE;
	}
}

    public function modifier($id){ 

    include('../include/connect_db.php');

      //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
      

        $req=$bdd->exec ("UPDATE `client` SET `nom_client`='$this->nom_client',`prenom_client`='$this->prenom_client',`email_client`='$this->email_client',`tel_client`='$this->tel_client',`adresse_client`='$this->adresse_client' WHERE id_client=$id");
				
        
        header('location: ../liste_des_clients.php');

        //return TRUE;
 		}	
			
public function supprimer(){ 
    
	include('../include/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id_client=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>