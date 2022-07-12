<?php
	$c=$_REQUEST['cod'];
	$sql="select * from Famila where CodFami = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>


<form class="form-horizontal" method="POST" action="index.php?cmd=upd-fami&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Codigo">Código Famiente </label>
    <div class="col-sm-6">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código Famiente" name="CodFami" value="<?php echo $c;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="NomeFami">Nome</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NomeFami" placeholder="Nome" name="NomeFami" value="<?php echo $lin['NomeFami'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TipoDespesa">Data de Nascimento</label>
    <div class="col-sm-6"> 
      <input type="date" class="form-control" id="DataNascFami" placeholder="DataNascFami" name="DataNascFami" value="<?php echo $lin['DataNascFami'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FotoFami">Foto</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="FotoFami" placeholder="FotoFami" name="FotoFami" value="<?php echo $lin['FotoFami'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="ObservervacaoFami">Observações</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="ObservervacaoFami" placeholder="ObservervacaoFami" name="ObservervacaoFami" value="<?php echo $lin['ObservervacaoFami'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="LoginFami">Login</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="LoginFami" placeholder="Login" name="LoginFami" value="<?php echo $lin['LoginFami'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="PasswdFami">Password</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="PasswdFami" placeholder="Passwd" name="PasswdFami" value="<?php echo $lin['PasswdFami'];?>">
    </div>
  </div>

 
  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Editar Familia</button>
    </div>
  </div>
</form>