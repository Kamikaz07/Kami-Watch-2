<?php
$NumPaci=$_REQUEST['NumPaci'];
$NumUti=$_REQUEST['NumUti'];
$DataPM=$_REQUEST['DataPM'];
$FreqCardMin=$_REQUEST['FreqCardMin'];
$FreqCardMax=$_REQUEST['FreqCardMax'];
$OxigSangMin=$_REQUEST['OxigSangMin'];
$OxigSangMax=$_REQUEST['OxigSangMax'];
$TemperaMin=$_REQUEST['TemperaMin'];
$TemperaMax=$_REQUEST['TemperaMax'];
$sql="insert into ParametosMedicos (NumPaci, NumUti, DataPM, FreqCardMin, FreqCardMax, OxigSangMin, OxigSangMax, TemperaMin, TemperaMax) values ('$NumPaci','$NumUti', '$DataPM', '$FreqCardMin', '$FreqCardMax', '$OxigSangMin','$OxigSangMax', '$TemperaMin', '$TemperaMax')";
$lig->query($sql) or die("ERRO:Inserção na tabela Parametros Medicos");
echo "Parametro inserido com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-pm>";
?> 