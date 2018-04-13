<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    echo "Nom Prénom : ";
    echo $_POST['user_name'];
    echo "<br><br>E-mail : ";
    echo "<br><br>Message : ";
    echo $_POST['user_message'];  

        
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_message = $_POST['user_message']; 
    
            // connexion à la BDD
        try {
                
                $bdd = new PDO('mysql:host=localhost;dbname=Restaurant;charset=utf8', 'root', 'pangot', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
                
        }
        catch (Exception $e) {
                echo "erreur";
                die ('erreur :'.$e->getMessage());           
        }

        
        // On ajoute une entrée dans la table user
   // $exec = $bdd->exec('INSERT INTO user(nom, mail, telephone, jour, heure, message) VALUES('.$user_name.','.$user_telephone.','.$user_jour.','.$user_heure.','.$user_message.')');
   if($bdd->exec("INSERT INTO user (nom, mail, message) VALUES('".$user_name."', '".$user_mail."', '".$user_message."')")){
           echo "<br><br>Votre message a bien été envoyé. MERCI !";
   }else{
           echo "Aie, erreur dans l'envoi";
   }
?>