<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


    echo "Votre réservation :<br><br>";
    echo "Nom Prénom : ";
    echo $_POST['user_name'];
    echo "<br><br>E-mail : ";
    echo "<br><br>Téléphone : ";
    echo $_POST['user_telephone'];
  /*  echo "<br><br>Pour le ";
    echo $_POST['user_jour'];
    echo " à ";
    echo $_POST['user_heure'];  */
    echo "<br><br>Demande : ";
    echo $_POST['user_message'];  

        
    $user_name = $_POST['user_name'];
    $user_mail = $_POST['user_mail'];
    $user_telephone = $_POST['user_telephone'];
    $user_jour = $_POST['user_jour'];
    $user_heure = $_POST['user_heure'];
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
   if($bdd->exec("INSERT INTO user (nom, mail, telephone, message) VALUES('".$user_name."', '".$user_mail."', '".$user_telephone."', '".$user_message."')")){
           echo "<br><br>Votre commande a bien été enregistrée";
   }else{
           echo "Aie, erreur dans l'enregistrement";
   }
?>


