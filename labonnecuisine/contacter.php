<?php

include "connexion.php";

$nom=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$requete="INSERT INTO contact (nom, email, sujet, message) VALUES ('$nom', '$email', '$subject','$message')";

$resultat = $mysqli->query($requete) or die ($mysqli->error());

echo "Message envoyé avec succès<br><br>";

?>
<br><br><center><a href="index.html">revenir à la page d'accueil</a></center><br>