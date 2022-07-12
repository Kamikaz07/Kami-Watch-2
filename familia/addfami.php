
	<H1 align="center"> Adicionar Paciente</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-paci">
  
  
<div class="form-group">
    <label class="control-label col-sm-4" for="NomePaci">Nome</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NomePaci" placeholder="Nome" name="NomePaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="TipoDespesa">Data de Nascimento</label>
    <div class="col-sm-6"> 
      <input type="date" class="form-control" id="DataNascPaci" placeholder="DataNascPaci" name="DataNascPaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="FotoPaci">Foto</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="FotoPaci" placeholder="FotoPaci" name="FotoPaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="ObservacoesPaci">Observações</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="ObservacoesPaci" placeholder="ObservacoesPaci" name="ObservacoesPaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="LoginPaci">Login</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="LoginPaci" placeholder="Login" name="LoginPaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="PasswdPaci">Password</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="PasswdPaci" placeholder="Passwd" name="PasswdPaci">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="NifPaci">NIF</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NifPaci" placeholder="NIF" name="NifPaci">
    </div>
  </div>


  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Paciente</button>
    </div>
  </div>
</form>
