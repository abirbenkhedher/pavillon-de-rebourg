<?php
require_once('../Model/Annonce.class.php');

$target_dir = "../assets/images/rooms/";
$target_file = $target_dir . basename($_FILES["image_annonce"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image_annonce"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    include('../include/connect_db.php');

       //$id=$_GET['user'];
      $data_rbk = htmlspecialchars( basename( $_FILES["image_annonce"]["name"]));
      echo $data_rbk;
        
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
/*if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/

// Check file size
if ($_FILES["image_annonce"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
 // header("location:../modifier-profil/?tof=too-large");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  //header("location:../modifier-profil/?tof=not-an-image");
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image_annonce"]["tmp_name"], $target_file)) {
     //echo "The file ". htmlspecialchars( basename( $_FILES["image_annonce"]["name"])). " has been uploaded.";
    //$user = new User($_POST['type_ab_sde'],$_FILES['fileToUpload']['name'],$_POST['rs_sde'],$_POST['adresse_sde'],$_POST['fax_sde'],$_POST['tel_sde'],$_POST['email_sde'],$_POST['web_sde'],$_POST['cat_sde'],$_POST['lan_sde'],$_POST['lat_sde'],$_POST['domaine_sde'],$_POST['resp_sde'],$_POST['password_sde'],$_POST['regime_sde'],$_POST['type_s_sde'],$_POST['local_sde'],$_POST['date_inscri_sde'],$_POST['date_login_sde'],$_POST['time_inscri_sde'],$_POST['time_login_sde'],$_POST['confirm_sde']);
    
	//$user->ajouter();
    //header("location:../index.php?result=yes");
    //echo $_POST['confirm_sde'];
    $annonce = new Annonce($_POST['titre_annonce'],$_POST['prix_annonce'],$_FILES['image_annonce']['name'],$_POST['description_annonce']);
    $annonce->ajouter();
    header("location:../liste_des_annonces.php?resultat=oui");
//exit();

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>


