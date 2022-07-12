<?php
$NumUti=$_SESSION['codi'];
$PasswdUti=$_REQUEST['PasswdPaci'];

$sql="update Famila set PasswdFami = md5('$PasswdUti') where CodFami='$NumUti'";
$lig->query($sql) or die("ERRO: alteração da tabela Paciente");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";
?>
