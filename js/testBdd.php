<?php
$bdd = new PDO('mysql:host=localhost;dbname=Restaurant;charset=utf8', 'root', 'pangot');
$reponse = $bdd->query('SELECT * FROM user');
while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'] . '<br>';
}
$reponse->closeCursor();
?>