<?php
$c=$_REQUEST['cod'];
$sql="delete from ParametosMedicos where CodPM='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela Parametos Medicos");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-pm>";
?>