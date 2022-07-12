  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<?php
// função Session_start() é a 1ª instrução do index.php
$u=$_REQUEST['LoginFami'];
$p=$_REQUEST['PasswdFami'];
/*$p1=md5($p);
echo $p1;*/
$sql="select * from Famila where LoginFami='$u' and PasswdFami=md5('$p')";
$res=$lig->query($sql);
if ($res->num_rows == 1) {// Encontrou apenas 1 utilizador
	$lin = $res->fetch_array();
	$_SESSION['codi'] = $lin['CodFami'];
	$_SESSION['nome'] = $lin['NomeFami'];
	$_SESSION['tipo'] = $lin['CodTputiF'];//echo $_SESSION['tipo'];
	$_SESSION['foto'] = $lin['FotoFami'];	
	$_SESSION['login']  = $lin['LoginFami'];
	$_SESSION['passwd'] = $lin['PasswdFami'];	
	
	echo  "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
}
else{
	echo "<center><br><br><br><a class=\"intro-lead-in\">Password diferente ou nome de familia errado!!!</a><br>";
	echo "<a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"index.php?cmd=home\">Voltar</a></center>";
	
}
?>
