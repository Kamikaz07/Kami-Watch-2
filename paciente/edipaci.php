<?php
	$c=$_REQUEST['cod'];
	$sql="select * from Paciente where NumPaci = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Paciente</title>
</head>

<form class="form-horizontal" method="POST" action="index.php?cmd=upd-paci&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Codigo">Código Paciente </label>
    <div class="col-sm-6">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código Paciente" name="NumPaci" value="<?php echo $c;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="NomePaci">Nome</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NomePaci" placeholder="Nome" name="NomePaci" value="<?php echo $lin['NomePaci'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TipoDespesa">Data de Nascimento</label>
    <div class="col-sm-6"> 
      <input type="date" class="form-control" id="DataNascPaci" placeholder="DataNascPaci" name="DataNascPaci" value="<?php echo $lin['DataNascPaci'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FotoPaci">Foto</label>
    <div class="col-sm-6">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile" name = "FotoPaci" value="<?php echo $lin['FotoPaci'];?>">
       <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="ObservacoesPaci">Observações</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="ObservacoesPaci" placeholder="Observações" name="ObservacoesPaci" value="<?php echo $lin['ObservacoesPaci'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="LoginPaci">Login</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="LoginPaci" placeholder="Login" name="LoginPaci" value="<?php echo $lin['LoginPaci'];?>">
    </div>
  </div>



  <div class="form-group">
    <label class="control-label col-sm-4" for="NifPaci">NIF</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NifPaci" placeholder="NIF" name="NifPaci" value="<?php echo $lin['NifPaci'];?>">
    </div>
  </div>

  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Editar Paciente</button>
    </div>
  </div>
</form>