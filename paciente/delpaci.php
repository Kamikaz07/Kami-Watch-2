<?php
$c=$_REQUEST['cod'];
$sql="delete from Paciente where NumPaci='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela Paciente");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-paci>";
?>