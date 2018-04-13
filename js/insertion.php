<?php 
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=Restaurant;charset=UTF8', 'root','pangot',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
	catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
		}	
	$bdd->exec('INSERT INTO user(nom, mail, telephone, jour, heure, message) VALUES(\'milletre\', \'irina\', \'irina@laposte.net\', \'1256983254\',\'0623598544\',\'12 ave du desir\')');
	echo 'Le jeu a bien été ajouté !'; 
?>


