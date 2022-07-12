<?php
$NumUti=$_SESSION['codi'];
$NomeUti=$_REQUEST['NomePaci'];
$DatanascUti=$_REQUEST['DataNascPaci'];
$Observa_esUti=$_REQUEST['ObservacoesPaci'];
$LoginUti=$_REQUEST['LoginFami'];


$sql="update Paciente set NomePaci = '$NomeUti',  ObservacoesPaci = '$Observa_esUti' where NumPaci='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Paciente");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";
?>
