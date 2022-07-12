<?php
$NumPaci=$_REQUEST['NumPaci'];
$CodFami=$_REQUEST['CodFami'];

$sql="insert into PaciFami (NumPaci, CodFami) values ('$NumPaci', '$CodFami')";
$lig->query($sql) or die("ERRO:Inserção na tabela PaciFami");
echo "PaciFami inserida com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-fami-paci>";
?> 
