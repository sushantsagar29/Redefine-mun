<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "u125806554_mun";

// Create connection
$dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
// Check connection
if(!$dbh)
{
  header('LOCATION:error.html');
  exit;
}
 ?>