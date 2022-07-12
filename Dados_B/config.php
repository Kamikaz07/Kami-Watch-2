<?php

$host = "localhost"; 
$user = "rodrigo36626"; 
$password = "leal2021"; 
$dbname = "rodrigo36626"; 

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>