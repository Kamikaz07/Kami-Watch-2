<?php
$Dsgtu=$_REQUEST['Dsgtu'];
$sql="insert into TipoUtilizador (Dsgtu) values ('$Dsgtu')";
$lig->query($sql) or die("ERRO:Inserção na tabela TipoUtilizador");
echo "TipoUtilizador inserido com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tputi>";
?> 
