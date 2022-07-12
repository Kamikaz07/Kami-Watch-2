<?php
$NumUti=$_SESSION['codi'];
$PasswdUti=$_REQUEST['PasswdUti'];

$sql="update Utilizador set PasswdUti = md5('$PasswdUti') where NumUti='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Utilizador");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";
?>
