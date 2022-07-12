  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<?php
// função Session_start() é a 1ª instrução do index.php
$u=$_REQUEST['LoginUti'];
$p=$_REQUEST['PasswdUti'];
/*$p1=md5($p);
echo $p1;*/
$sql="select * from Utilizador where LoginUti='$u' and PasswdUti=md5('$p')";
$res=$lig->query($sql);
if ($res->num_rows == 1) {// Encontrou apenas 1 utilizador
	$lin = $res->fetch_array();
	$_SESSION['codi'] = $lin['NumUti'];
	$_SESSION['nome'] = $lin['NomeUti'];
	$_SESSION['tipo'] = $lin['CodTputi'];//echo $_SESSION['tipo'];
	$_SESSION['foto'] = $lin['FotoUti'];	
	$_SESSION['login']  = $lin['LoginUti'];
	$_SESSION['passwd'] = $lin['PasswdUti'];	
	//echo 'login :)';
	echo  "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
}
elseif ($res->num_rows == 0) {
	$sql1="select * from Paciente where LoginPaci='$u' and PasswdPaci=md5('$p')";
$res1=$lig->query($sql1);
$lin1 = $res1->fetch_array();
	$_SESSION['codi']  = $lin1['NumPaci'];
	$_SESSION['nome']  = $lin1['NomePaci'];
	$_SESSION['nif'] = $lin1['NifPaci'];//echo $_SESSION['tipo'];
	$_SESSION['foto']  = $lin1['FotoPaci'];	
	$_SESSION['tipo']  = $lin1['CodTpUti'];
	$_SESSION['login']  = $lin1['LoginPaci'];
	$_SESSION['passwd']  = $lin1['PasswdPaci'];	
	$_SESSION['lat']  = $lin1['Latitude'];
	$_SESSION['lng']  = $lin1['Longitude'];	
	//echo $sql1;


	echo  "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
}
else{
	echo "<center><br><br><br><a class=\"intro-lead-in\">Password diferente ou nome de utilizador errado!!!</a><br>";
	echo "<a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"index.php?cmd=home\">Voltar</a></center>";
	
}
?>
