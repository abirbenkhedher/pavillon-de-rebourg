<?php
class CnxClient{
private $email_client;
private $motdepasse_client;

      
function __construct($email_client,$motdepasse_client){
$this->email_client = $email_client;
$this->motdepasse_client = md5($motdepasse_client);
}


public function verifier(){ 

    include('../include/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE email_client = '$this->email_client' AND motdepasse_client = '$this->motdepasse_client'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
  else
{
      session_start();

      $_SESSION['id_client'] = $resultat['id_client'];
      $_SESSION['nom_client'] = $resultat['nom_client'];
      $_SESSION['prenom_client'] = $resultat['prenom_client'];
      $_SESSION['email_client'] = $resultat['email_client'];
      $_SESSION['motdepasse_client'] = $resultat['motdepasse_client'];
      $_SESSION['tel_client'] = $resultat['tel_client'];
      $_SESSION['adresse_client'] = $resultat['adresse_client'];


	
	header('location:../rooms_list.php');
} 
}
}


$client = new CnxClient($_POST['email_client'],$_POST['motdepasse_client']);


?>