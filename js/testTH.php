<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=Restaurant;charset=utf8', 'root', 'pangot', array(PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE_EXEPTION));

}
catch (Exception $e) {
        die ('erreur :'.$e->getMessage());           
}  


    // On ajoute une entrée dans la table user
// $exec = $bdd->exec('INSERT INTO user(nom, mail, telephone, jour, heure, message) VALUES('.$user_name.', '.$user_telephone.', '.$user_jour.', '.$user_heure.', '.$user_message.')');
$bdd->exec('INSERT INTO 'user' ('nom', 'mail', 'telephone', 'jour', 'heure', 'message') VALUES('texte', 'texte', 'texte', 'texte', 'texte', 'texte')');

echo '<br><br><br>Votre réservation a bien été enrégistrée !';


?>
INSERT INTO `user` (`nom`, `mail`, `telephone`, `jour`, `heure`, `message`) VALUES ('Ferreira', 'Maud', '1234567800', '2018-04-19', '19:00:00', 'HHHHHHHH');