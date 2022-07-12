<?php
$c=$_REQUEST['cod'];
$sql="delete from Famila where CodFami='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela Familia");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-fami>";
?>