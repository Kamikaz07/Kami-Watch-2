

<?php

//echo "estou no logout";
unset($_SESSION["nome"]);
session_destroy();
if(!isset($_SESSION["nome"]))




$p = $_SESSION['passwd']; //echo $p;
$u=$_SESSION['login']; //echo $u;


$sql="select * from Paciente where LoginPaci='$u' and PasswdPaci='$p'";
$res=$lig->query($sql);
if ($res->num_rows == 1) {
    $_SESSION['codi']  = $lin['NumPaci'];
	$_SESSION['nome']  = $lin['NomePaci'];
	$_SESSION['nif'] = $lin['NifPaci'];//echo $_SESSION['tipo'];
	$_SESSION['foto']  = $lin['FotoPaci'];	
	$_SESSION['tipo']  = $lin['CodTpUti'];
	$_SESSION['login']  = $lin['LoginPaci'];
	$_SESSION['passwd']  = $lin['PasswdPaci'];	

    
}
//echo $sql;
echo  "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
?>