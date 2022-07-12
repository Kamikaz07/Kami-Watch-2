<?php
$NumUti=$_SESSION['codi'];
$NomeUti=$_REQUEST['NomeUti'];
$DatanascUti=$_REQUEST['DatanascUti'];
$Observa_esUti=$_REQUEST['Observa_esUti'];
$LoginUti=$_REQUEST['LoginUti'];


$sql="update Utilizador set NomeUti = '$NomeUti', DatanascUti = '$DatanascUti', Observa_esUti = '$Observa_esUti', LoginUti = '$LoginUti' where NumUti='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Utilizador");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";
?>
