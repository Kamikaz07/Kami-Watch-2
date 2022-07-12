<?php 

$lig=new mysqli("localhost", "rodrigo36626", "leal2021", "rodrigo36626") or die ("Problema na ligação ao servidor e base de dados MYSQL");

$sql="select NomePaci from DadosBiometricos DB,Paciente P where DB.NumPaci=P.NumPaci"; //
//echo $sql;
date_default_timezone_set('Europe/Lisbon');
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

$lin=$res->fetch_array();

       $f=rand(42,119);
       $o=rand(81,100);
       $t=rand(30,37);
       $date = date(('y-m-d H:i:s'), time()+60*9);

  ?>

<form action="index.php?cmd=ins-db-auto" method="post">
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
   <input type="hidden" name="FreqCard" value="<?php echo $f ?>">
   <input type="hidden" name="DataDB" value="<?php echo $date ?>">
   <input type="hidden" name="OxigSang" value="<?php echo $o ?>">
   <input type="hidden" name="Tempera" value="<?php echo $t ?>">
   
   <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-4">
      <button type="submit" class="btn btn-default">Adicionar Automaticamente</button>
    </div>
  </div>
</form>