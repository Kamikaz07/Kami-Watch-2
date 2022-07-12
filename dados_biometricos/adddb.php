
	<H1 align="center"> Adicionar Dados Biometricos</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-db">
  
<div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Paciente</label>
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
    <label class="control-label col-sm-4" for="DataDB">Data-Hora</label>
    <div class="col-sm-4"> 
      <input type="datetime-local" class="form-control" id="DataDB" placeholder="" name="DataDB">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCard">Frequencia Cardiaca </label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCard" placeholder="" name="FreqCard">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSang">Oxigenação Sangue</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSang" placeholder="" name="OxigSang">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Tempera">Temperatura</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="Tempera" placeholder="" name="Tempera">
    </div>
  </div>



  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default">Adicionar Dados Biometricos</button>
    </div>
  </div>
</form>

<?php include "./dados_biometricos/add-data.php"; ?>
