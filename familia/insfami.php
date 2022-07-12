<?php
$NomeFami=$_REQUEST['NomeFami'];
$DataNascFami=$_REQUEST['DataNascFami'];
$FotoFami=$_REQUEST['FotoFami'];
$ObservervacaoFami=$_REQUEST['ObservervacaoFami'];
$LoginFami=$_REQUEST['LoginFami'];
$PasswdFami=$_REQUEST['PasswdFami'];
$sql="insert into Famiente (NomeFami, DataNascFami, FotoFami, ObservervacaoFami, LoginFami, PasswdFami, NifFami) values ('$NomeFami', '$DataNascFami', '$FotoFami', '$ObservervacaoFami', '$LoginFami', '$PasswdFami')";
$lig->query($sql) or die("ERRO:Inserção na tabela Familia");
echo "Familia inserida com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-fami>";
?> 
