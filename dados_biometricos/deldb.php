<?php
$c=$_REQUEST['cod'];
$sql="delete from DadosBiometricos where CodDB='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela DadosBiometricos");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-db>";
?>