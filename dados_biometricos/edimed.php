<?php
	$c=$_REQUEST['cod'];
	$sql="select * from DadosBiometricos where CodDB = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>

<H1 align="center"> Editar Dados Biometricos</H1><br><br>



<form class="form-horizontal" method="POST" action="index.php?cmd=upd-db&cod=<?php echo $c;?>">
  
<div class="form-group">
    <label class="control-label col-sm-4" for="Codigo">Código  </label>
    <div class="col-sm-4">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código " name="CodDB" value="<?php echo $c;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Paciente </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="NumPaci">
	<?php
	$sql="select * from Paciente ";
		$res1=$lig->query($sql);
		while($lin1=$res1->fetch_array())
		{
      if($lin['NumPaci']==$lin1['NumPaci'])
        echo "<option value=",$lin1['NumPaci']," selected>",$lin1['NomePaci'],"</option>";
      else
			  echo "<option value=",$lin1['NumPaci'],">",$lin1['NomePaci'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="DataDB">Data</label>
    <div class="col-sm-4"> 
      <input type="date" class="form-control" id="DataDB" placeholder="" name="DataDB" value="<?php echo $lin['DataDB'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCard">Frequencia Cardiaca </label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCard" placeholder="" name="FreqCard" value="<?php echo $lin['FreqCard'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSang">Oxigenação Sangue</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSang" placeholder="" name="OxigSang" value="<?php echo $lin['OxigSang'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Tempera">Temperatura</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="Tempera" placeholder="" name="Tempera" value="<?php echo $lin['Tempera'];?>">
    </div>
  </div>



  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default">Modificar Dados Biometricos</button>
    </div>
  </div>
</form>