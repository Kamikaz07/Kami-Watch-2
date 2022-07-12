
	<H1 align="center"> Adicionar Paciente-Familiar</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-fami-paci">
  
  
<div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Paciente </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="NumPaci">
	<?php 
	$sql="select * from Paciente";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['NumPaci'],">",$lin['NomePaci'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Familiar </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="CodFami">
	<?php
	$sql="select * from Famila";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodFami'],">",$lin['NomeFami'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>


  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Paciente</button>
    </div>
  </div>
</form>
