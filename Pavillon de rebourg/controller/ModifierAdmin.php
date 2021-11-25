<?php
require_once('../model/Admin.class.php');
$admin = new Admin($_POST['nom_admin'],$_POST['prenom_admin'],$_POST['login_admin'],$_POST['email_admin'],$_POST['motdepasse_admin'],$_POST['type_admin']);
$admin->modifier();

header("location:../liste_des_admins.php?resultat=oui");
?>