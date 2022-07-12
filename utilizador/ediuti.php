<?php
	$c=$_REQUEST['cod'];
	$sql="select * from Utilizador where NumUti = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Utilizador</title>
</head>

<form class="form-horizontal" method="POST" action="index.php?cmd=upd-uti&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Codigo">Código Utilizador</label>
    <div class="col-sm-6">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código de Utilizador" name="NumUti" value="<?php echo $c;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="NomeUti">Nome Utilizador</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="NomeUti" placeholder="Nome Utilizador" name="NomeUti" value="<?php echo $lin['NomeUti'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Tipo Utilizador </label>
    <div class="col-sm-4"> 
	<select class="form-control" name="CodTputi">
<?php
	$sql="select * from TipoUtilizador ";
		$res1=$lig->query($sql);
		while($lin1=$res1->fetch_array())
		{
      if($lin['CodTputi']==$lin1['CodTputi'])
        echo "<option value=",$lin1['CodTputi']," selected>",$lin1['Dsgtu'],"</option>";
      else
			  echo "<option value=",$lin1['CodTputi'],">",$lin1['Dsgtu'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Foto">Foto</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="Foto" placeholder="Foto" name="FotoUti" value="<?php echo $lin['FotoUti'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="datanasc">Data Nascimento </label>
    <div class="col-sm-6"> 
      <input type="date" class="form-control" id="datanasc" placeholder="Data" name="DatanascUti" value="<?php echo $lin['DatanascUti'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Login">Login </label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="Login" placeholder="Login" name="LoginUti" value="<?php echo $lin['LoginUti'];?>">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="PasswdUti">Password</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" id="PasswdUti" placeholder="" name="PasswdUti" value="<?php echo $lin['PasswdUti'];?>">
    </div>
  </div>


  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Modificar Utilizador</button>
    </div>
  </div>
</form>