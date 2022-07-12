<?php
$CodFami=$_REQUEST['CodFami'];
$NomeFami=$_REQUEST['NomeFami'];
$DataNascFami=$_REQUEST['DataNascFami'];
$FotoFami=$_REQUEST['FotoFami'];
$ObservacoesFami=$_REQUEST['ObservacoesFami'];
$LoginFami=$_REQUEST['LoginFami'];
$PasswdFami=$_REQUEST['PasswdFami'];


$sql="update Famila set NomeFami = '$NomeFami', DataNascFami = '$DataNascFami', FotoFami = '$FotoFami', ObservacoesFami = '$ObservacoesFami', LoginFami = '$LoginFami', PasswdFami = '$PasswdFami', NifFami = '$NifFami' where CodFami='$CodFami'";
$lig->query($sql) or die("ERRO: alteração da tabela Familia");
echo "Alteração da Familia efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-fami>";
?> 

