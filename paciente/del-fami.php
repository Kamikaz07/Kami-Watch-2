<?php
$c=$_REQUEST['cod'];
$sql="delete from PaciFami where CodFami='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela PaciFami");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=familia>";
?>