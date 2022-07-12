<?php

$c=$_SESSION['nome'];
// Select all the rows in the markers table
$result_markers = "SELECT * FROM markers  where NomePaci = '$c'";
$resultado_markers = mysqli_query($conn, $result_markers);
?>