<?php
	$ln = $_GET["ln"]; 
	$lp = md5($_GET["lp"]);
	$lig= new mysqli ("localhost", "rodrigo36626", "leal2021", "rodrigo36626"); 
	$s="select * from Famila where LoginFami = '$ln' and PasswdFami = '$lp'";
	$res=$lig->query($s); 
	$l=$res->fetch_array();
	if (!$l){
		echo "*Nome de Utilizador ou Palavra-Passe errados!!";
		return false;
	}
?>
