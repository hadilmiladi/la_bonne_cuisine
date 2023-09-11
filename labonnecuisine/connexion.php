<?php

$mysqli = new mysqli("localhost", "root", "", "labonnecuisine");


 if ($mysqli->connect_error) { 


die($mysqli->connect_error);


}
?>