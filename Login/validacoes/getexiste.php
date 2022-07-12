<?php
	$q=$_GET["q"]; // recebe uma parâmetro por GET
	$lig= new mysqli ("localhost", "rodrigo36626", "leal2021", "rodrigo36626"); 
	$s="select * from Utilizador where NomeUtilizador = '$q'";
	$res=$lig->query($s); 
	$l=$res->fetch_array();
	if($l)
		echo "Nome do Utilizador já existente";
?>
