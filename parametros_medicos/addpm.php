
	<H1 align="center"> Adicionar Parametos Medicos</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-pm">
  
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
    <label class="control-label col-sm-4" for="DataPM">Data</label>
    <div class="col-sm-4"> 
      <input type="date" class="form-control" id="DataPM" placeholder="" name="DataPM">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCardMin">Frequencia Cardiaca Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCardMin" placeholder="" name="FreqCardMin">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FreqCardMax">Frequencia Cardiaca Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="FreqCardMax" placeholder="" name="FreqCardMax">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSangMin">Oxigenação do Sangue Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSangMin" placeholder="" name="OxigSangMin">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="OxigSangMax">Oxigenação do Sangue Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="OxigSangMax" placeholder="" name="OxigSangMax">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TemperaMin">Temperatura Minima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="TemperaMin" placeholder="" name="TemperaMin">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TemperaMax">Temperatura Maxima</label>
    <div class="col-sm-4"> 
      <input type="number" class="form-control" id="TemperaMax" placeholder="" name="TemperaMax">
    </div>
  </div>


  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Parametos Medicos</button>
    </div>
  </div>
</form>
