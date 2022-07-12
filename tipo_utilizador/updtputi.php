<?php

$Cod=$_REQUEST['cod'];
$Dsgtu=$_REQUEST['Dsgtu'];


$sql="update TipoUtilizador set Dsgtu = '$Dsgtu' where CodTputi='$Cod'";
$lig->query($sql) or die("ERRO: alteração da tabela TipoUtilizador");
echo "Alteração do empregado efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tputi>";
?> 

