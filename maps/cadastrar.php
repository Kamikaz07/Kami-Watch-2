<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
  <head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Cadastrar</title>
	</head>
	<body>
		<a href="index.php?cmd=map">Mapa</a><br><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="index.php?cmd=processa_cad">
		<div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Paciente </label>
    <div class="col-sm-3"> 
	<select class="form-control" name="NomePaci">
	<?php
	$sql="select * from Paciente";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['NomePaci'],">",$lin['NomePaci'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>
  			

			<div class="form-group">
			<label>Latitude: </label><br>
			<div class="col-sm-3">
			<input class="form-control" type="text" name="lat" placeholder="Digite a Latitude">
			</div>
			</div>
			
			

			<div class="form-group">
			<label>Longitude: </label><br>
			<div class="col-sm-3">
			<input class="form-control" type="text" name="lng" placeholder="Digite a Longitude">
			</div>
			</div>		
			

			
		
			<div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Localização</button>
    </div>
  </div>
		</form>
	</body>
</html>