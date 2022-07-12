<?php
	$c=$_REQUEST['cod'];
	$sql="select * from ParametosMedicos where CodPM = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Despesas</title>
</head>

<H1 align="center">Editar Parametos Medicos</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=upd-pm&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Codigo">Código  </label>
    <div class="col-sm-4">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código" name="CodPM" value="<?php echo $c;?>">
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
    <label class="control-label col-sm-4" for="Designacao">Utilizador </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="NumUti">
	<?php
	$sql="select * from Utilizador ";
		$res1=$lig->query($sql);
		while($lin1=$res1->fetch_array())
		{
      if($lin['NumUti']==$lin1['NumUti'])
        echo "<option value=",$lin1['NumUti']," selected>",$lin1['NomeUti'],"</option>";
      else
			  echo "<option value=",$lin1['NumUti'],">",$lin1['NomeUti'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="DataPM">Data</label>
    <div class="col-sm-4"> 
      <input type="date" class="form-control" id="DataPM" placeholder="" name="DataPM" value="<?php echo $lin['DataPM'];?>">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCardMin">Frequencia Cardiaca Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCardMin" placeholder="" name="FreqCardMin" value="<?php echo $lin['FreqCardMin'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCardMax">Frequencia Cardiaca Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCardMax" placeholder="" name="FreqCardMax" value="<?php echo $lin['FreqCardMax'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSangMin">Oxigenação do Sangue Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSangMin" placeholder="" name="OxigSangMin" value="<?php echo $lin['OxigSangMin'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSangMax">Oxigenação do Sangue Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSangMax" placeholder="" name="OxigSangMax" value="<?php echo $lin['OxigSangMax'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TemperaMin">Temperatura Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="TemperaMin" placeholder="" name="TemperaMin" value="<?php echo $lin['TemperaMin'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TemperaMax">Temperatura Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="TemperaMax" placeholder="" name="TemperaMax" value="<?php echo $lin['TemperaMax'];?>">
    </div>
  </div>


  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default">Editar Parametos Medicos</button>
    </div>
  </div>
</form>