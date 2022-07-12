<?php
$CodPM=$_REQUEST['CodPM'];
$NumPaci=$_REQUEST['NumPaci'];
$NumUti=$_REQUEST['NumUti'];
$DataPM=$_REQUEST['DataPM'];
$FreqCardMin=$_REQUEST['FreqCardMin'];
$FreqCardMax=$_REQUEST['FreqCardMax'];
$OxigSangMin=$_REQUEST['OxigSangMin'];
$OxigSangMax=$_REQUEST['OxigSangMax'];
$TemperaMin=$_REQUEST['TemperaMin'];
$TemperaMax=$_REQUEST['TemperaMax'];

$sql="update ParametosMedicos set NumPaci = '$NumPaci', NumUti = '$NumUti', DataPM = '$DataPM', FreqCardMin = '$FreqCardMin', FreqCardMax = '$FreqCardMax', OxigSangMin = '$OxigSangMin', OxigSangMax = '$OxigSangMax', TemperaMin = '$TemperaMin', TemperaMax = '$TemperaMax' where CodPM='$CodPM'";
$lig->query($sql) or die("ERRO: Alteração da tabela ParametosMedicos");
echo "Alteração dos Parametos Medicos efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-pm>";
?> 

