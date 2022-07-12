<?php
$NumUti=$_REQUEST['cod'];
$NomeUti=$_REQUEST['NomeUti'];
$DatanascUti=$_REQUEST['DatanascUti'];
$FotoUti=$_REQUEST['FotoUti'];
$CodTputi=$_REQUEST['CodTputi'];
$LoginUti=$_REQUEST['LoginUti'];
$PasswdUti=$_REQUEST['PasswdUti'];

$sql="update Utilizador set NomeUti = '$NomeUti', DatanascUti = '$DatanascUti', FotoUti = '$FotoUti', CodTputi = '$CodTputi', LoginUti = '$LoginUti', PasswdUti = md5('$PasswdUti') where NumUti='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Utilizador");
echo "Alteração do Utilizador efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-uti>";
?> 
