<?php
	$u=$_REQUEST['NomeUtilizador'];
	$p=MD5($_REQUEST['password']);
	$sql="select * from Utilizador where NomeUtilizador='$u' and password='$p'";
	$res=$lig->query($sql);
	if ($res->num_rows == 1) {// Encontrou apenas 1 utilizador
		$lin = $res->fetch_array();
		$_SESSION['cod']  = $lin['CodUtilizador'];
		$_SESSION['nome']  = $lin['NomeUtilizador'];
		$_SESSION['foto']  = $lin['foto'];	
		$_SESSION['nivel']  = $lin['nivel'];
		$_SESSION['datanascimento'] = $lin['DataNascimento'];
		$_SESSION['email'] = $lin['EmailUtilizador'];
		echo "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
	}
	else{
		echo "<center><br><br><br><a class=\"intro-lead-in\">Password diferente ou nome de utilizador errado!!!</a><br>";
		echo "<a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"index.php?cmd=home2\">Voltar</a></center>";
	}
?>
