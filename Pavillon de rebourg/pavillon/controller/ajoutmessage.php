
<?php 

session_start();

require_once('../model/message.class.php');
include('include/connect_db.php');
$nom_message = $_POST['nom_message'];
$prenom_message = $_POST['prenom_message'];
$email_message = $_POST['email_message'];
$sujet_message = $_POST['sujet_message'];
$message_message = $_POST['message_message'];

$message= new Message($nom_message,$prenom_message,$email_message,$sujet_message,$message_message);
$message->ajouter();

header("location:../contact.php?mess=ok");
?>