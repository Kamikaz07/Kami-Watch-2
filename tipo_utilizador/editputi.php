<?php
	$c=$_REQUEST['cod'];
	$sql="select * from TipoUtilizador";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Tipo Utilizador</title>
</head>

<H1 align="center">Editar Tipo Utilizador</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=upd-tputi&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Codigo">Código Empregado </label>
    <div class="col-sm-5">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código TipoUtilizador" name="CodTputi" value="<?php echo $c;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Dsgtu">Tipo Utilizador </label>
    <div class="col-sm-5"> 
      <input type="text" class="form-control" id="Dsgtu" placeholder="Designação Tipo Utilizador" name="Dsgtu" value="<?php echo $lin['Dsgtu'];?>">
    </div>
  </div>

 

  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Editar Tipo Utilizador</button>
    </div>
  </div>
</form>