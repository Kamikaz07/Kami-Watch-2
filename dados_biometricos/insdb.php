 <?php
$NumPaci=$_REQUEST['NumPaci'];
$DataDB=$_REQUEST['DataDB'];
$FreqCard=$_REQUEST['FreqCard'];
$OxigSang=$_REQUEST['OxigSang'];
$Tempera=$_REQUEST['Tempera'];
$Emergencia=$_REQUEST['Emergencia'];

$sql="insert into DadosBiometricos (NumPaci, DataDB, FreqCard, OxigSang, Tempera, Emergencia) values ('$NumPaci', '$DataDB', '$FreqCard','$OxigSang', '$Tempera', '$Emergencia')";
$lig->query($sql) or die("ERRO:Inserção na tabela Dados Biometricos");
echo "Dados inseridos com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-db>";
?> 
