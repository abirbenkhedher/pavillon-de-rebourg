
<?php
// Connexion à la base de données
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//bech ytalaali les erreur ili teb3in l base
	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());
		
	}$bdd->query("SET NAMES UTF8")	
	?>