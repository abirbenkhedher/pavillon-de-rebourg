<?php
class Annonce{
  private $titre_annonce;
  private $prix_annonce;
  private $image_annonce;
  private $descriptopn_annonce;

  function __construct($titre_annonce,$prix_annonce,$image_annonce,$description_annonce)
  {
  $this->titre_annonce = $titre_annonce;
  $this->prix_annonce = $prix_annonce;
  $this->image_annonce = $image_annonce;
  $this->description_annonce = $description_annonce;
  }

  public function ajouter()
  {
  include('../include/connect_db.php');

  $req = $bdd->query("SELECT * FROM annonce WHERE titre_annonce LIKE '$this->titre_annonce'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
    $req = $bdd->exec ("INSERT INTO `annonce` ( `titre_annonce`, `prix_annonce`, `image_annonce`, `description_annonce`) VALUES ('$this->titre_annonce', '$this->prix_annonce', '$this->image_annonce', '$this->description_annonce')");
		
		echo'oui';
              //return TRUE;
    } else {
              echo'non';
              //return FALSE;
	}

  
}
public function modifier(){ 

  include('../include/connect_db.php');

    //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
    $id = $_GET['id'];

      $r=$bdd->exec ("UPDATE `annonce` SET `titre_annonce`='$this->titre_annonce',`prix_annonce`='$this->prix_annonce',`image_annonce`='$this->image_annonce',`description_annonce`='$this->description_annonce' WHERE id_annonce=$id");
      echo'oui';
      //var_dump($r);
      //return TRUE;
  }
  
  
  public function supprimer(){ 
    

    include('../include/connect_db.php');//.. maaneha okhrj mil dossier hedha w odkhel lil includ
  
      $req = $bdd->exec('DELETE FROM annonce WHERE id_annonce=\''.$_GET['id'].'\''); 
  
      echo'oui';	

}

}

?>