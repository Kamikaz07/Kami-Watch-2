<?php
$c=$_REQUEST['cod'];
$sql="delete from TipoUtilizador where CodTputi='$c'";
$lig->query($sql) or die("ERRO:Eliminar da tabela TipoUtilizador");
echo "Registo eliminado";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tputi>";
?>