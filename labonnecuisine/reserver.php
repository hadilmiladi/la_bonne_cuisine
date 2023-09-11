<?php

include "connexion.php";

$nom=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$people=$_POST['people'];
$message=$_POST['message'];

$requete="INSERT INTO reservations (nom, email, telephone, date, temps, nombrepersonnes, message) VALUES ('$nom', '$email', '$phone', '$date','$time','$people','$message')";

$resultat = $mysqli->query($requete) or die ($mysqli->error());

echo "Demande de réservation envoye avec succès<br><br>";

?>
<br><br><center><a href="index2.html">Revenir à la page d'accueil</a></center><br>