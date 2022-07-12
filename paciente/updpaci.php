<?php
$NumPaci=$_REQUEST['NumPaci'];
$NomePaci=$_REQUEST['NomePaci'];
$DataNascPaci=$_REQUEST['DataNascPaci'];
$FotoPaci=$_REQUEST['FotoPaci'];
$ObservacoesPaci=$_REQUEST['ObservacoesPaci'];
$LoginPaci=$_REQUEST['LoginPaci'];
$PasswdPaci=$_REQUEST['PasswdPaci'];
$NifPaci=$_REQUEST['NifPaci'];

$sql="update Paciente set NomePaci = '$NomePaci', DataNascPaci = '$DataNascPaci', FotoPaci = '$FotoPaci', ObservacoesPaci = '$ObservacoesPaci', LoginPaci = '$LoginPaci', PasswdPaci = md5('$PasswdPaci'), NifPaci = '$NifPaci' where NumPaci='$NumPaci'";
$lig->query($sql) or die("ERRO: alteração da tabela Paciente");
echo "Alteração do Tipo de Despesa efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-paci>";
?> 

