<?php

$servername = "databasetpw.chh7h6xrpzrp.us-east-2.rds.amazonaws.com";
$dBUsername = "admin";
$dBPassword = "admin123";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Conexión fallida:" .mysqli_connect_error());
}
?>

