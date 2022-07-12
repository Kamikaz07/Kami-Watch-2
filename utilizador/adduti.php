
	<H1 align="center"> Adicionar Utilizador</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-uti">
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Nome Utilizador</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NomeUti" placeholder="Nome Utilizador" name="NomeUti">
    </div>
  </div>



  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Tipo Utilizador </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="CodTputi">
	<?php
	$sql="select * from TipoUtilizador";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodTputi'],">",$lin['Dsgtu'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-4" for="Foto">Foto</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="Foto" placeholder="Foto" name="FotoUti">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="datanasc">Data Nascimento </label>
    <div class="col-sm-6"> 
      <input type="date" class="form-control" id="datanasc" placeholder="Data" name="DatanascUti">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="Login">Login </label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="Login" placeholder="Login" name="LoginUti">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="PasswordUti">Password</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" id="PasswordUti" placeholder="Password" name="PasswordUti">
    </div>
  </div>

  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Utilizador</button>
    </div>
  </div>
</form>
