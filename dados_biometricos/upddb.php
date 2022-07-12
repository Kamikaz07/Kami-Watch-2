<?php
$CodDB=$_REQUEST['CodDB'];
$NumPaci=$_REQUEST['NumPaci'];
$DataDB=$_REQUEST['DataDB'];
$FreqCard=$_REQUEST['FreqCard'];
$OxigSang=$_REQUEST['OxigSang'];
$Tempera=$_REQUEST['Tempera'];
$Emergencia=$_REQUEST['Emergencia'];

$sql="update DadosBiometricos set NumPaci = '$NumPaci', DataDB = '$DataDB', FreqCard = '$FreqCard', OxigSang = '$OxigSang', Tempera = '$Tempera', Emergencia = '$Emergencia' where CodDB='$CodDB'";
$lig->query($sql) or die("ERRO: na alteração da tabela Dados Biometricos");
echo "Alteração efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-db>";
?> 

