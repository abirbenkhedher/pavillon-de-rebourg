<?php
class CnxAdmin{
private $login_admin;
private $motdepasse_admin;

      
function __construct($login_admin,$motdepasse_admin){
$this->login_admin = $login_admin;
$this->motdepasse_admin = md5($motdepasse_admin);
}


public function verifier(){ 

    include('../include/connect_db.php');
    $req = $bdd->query(" SELECT * FROM administrateur WHERE login_admin = '$this->login_admin' AND motdepasse_admin = '$this->motdepasse_admin'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
  else
{
      session_start();

      $_SESSION['id_admin'] = $resultat['id_admin'];
      $_SESSION['nom_admin'] = $resultat['nom_admin'];
      $_SESSION['prenom_admin'] = $resultat['prenom_admin'];
      $_SESSION['login_admin'] = $resultat['login_admin'];
      $_SESSION['email_admin'] = $resultat['email_admin'];
      $_SESSION['motdepasse_admin'] = $resultat['motdepasse_admin'];
      $_SESSION['type_admin'] = $resultat['type_admin'];

	
	header('location:../index.php');
} 
}
}


$admin = new CnxAdmin($_POST['login_admin'],$_POST['motdepasse_admin']);


?>