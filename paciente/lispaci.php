	
<div class="card">
<div class="card-body">
  <h1 align="center">Listagem Paciente</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Foto</th>
        <th>Observações</th>
        <th>Login</th>
        <th>NIF</th>
		<th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
<?php 
$sql="select * from Paciente where 1=1";
//echo $sql;
  
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['NumPaci']; ?></td>
        <td><?php echo$lin['NomePaci']; ?></td>
        <td><?php echo$lin['DataNascPaci']; ?></td>
        <td><?php echo$lin['FotoPaci']; ?></td>
        <td><?php echo$lin['ObservacoesPaci']; ?></td>
        <td><?php echo$lin['LoginPaci']; ?></td>
        <td><?php echo$lin['NifPaci']; ?></td>
		
        <td><a href="index.php?cmd=del-paci&cod=<?php echo$lin['NumPaci'];?>">Apagar</a></td>
        <td><a href="index.php?cmd=edi-paci&cod=<?php echo$lin['NumPaci'];?>">Editar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>
</div>
