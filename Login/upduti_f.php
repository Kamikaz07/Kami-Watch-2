<?php
$NumUti=$_SESSION['codi'];
$NomeUti=$_REQUEST['NomeFami'];
$DatanascUti=$_REQUEST['DataNascFami'];
$Observa_esUti=$_REQUEST['ObservervacaoFami'];
$LoginUti=$_REQUEST['LoginFami'];


$sql="update Famila set NomeFami = '$NomeUti',  ObservervacaoFami = '$Observa_esUti' where CodFami='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Famila");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";
?>
