<?php
session_start();
ob_start();
include_once("conexao.php");

//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Salvar os dados no bd
$result_markers = "INSERT INTO markers(NomePaci, lat, lng) 
				VALUES ('".$dados['NomePaci']."','".$dados['lat']."', '".$dados['lng']."')";

$resultado_markers = mysqli_query($conn, $result_markers);
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<span style='color: green';>Endereço cadastrado com sucesso!</span>";
	header("Location: cadastrar.php");
	echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=map_reg>";
}else{
	$_SESSION['msg'] = "<span style='color: red';>Erro: Endereço não foi cadastrado com sucesso!</span>";
	header("Location: cadastrar.php");
	echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=map_reg>";	
}


