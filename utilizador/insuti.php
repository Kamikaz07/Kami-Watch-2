<?php
$NomeUti=$_REQUEST['NomeUti'];
$FotoUti=$_REQUEST['FotoUti'];
$TipoUti=$_REQUEST['CodTputi'];
$DatanascUti=$_REQUEST['DatanascUti'];
$loginUti=$_REQUEST['LoginUti'];
$PasswdUti=$_REQUEST['PasswordUti'];
$sql="insert into Utilizador (NomeUti, CodTputi, FotoUti, DatanascUti, LoginUti, PasswdUti) 
values ('$NomeUti', '$TipoUti','$FotoUti', '$DatanascUti', '$loginUti', md5('$PasswdUti'))";
$lig->query($sql) or die("ERRO:Inserção na tabela Utilizador");
echo "Utilizador inserido com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-uti>";
?> 