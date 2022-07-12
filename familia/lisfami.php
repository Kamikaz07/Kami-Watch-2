	
<div class="card">
  <h1 align="center">Listagem Familia</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Foto</th>
        <th>Observações</th>
        <th>Login</th>
        <th>Password</th>
		<th></th>
		<th></th>
		
      </tr>
    </thead>
    <tbody>
<?php 
$sql="select * from Famila where 1=1";
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['CodFami']; ?></td>
        <td><?php echo$lin['NomeFami']; ?></td>
        <td><?php echo$lin['DataNascFami']; ?></td>
        <td><?php echo$lin['FotoFami']; ?></td>
        <td><?php echo$lin['ObservervacaoFami']; ?></td>
        <td><?php echo$lin['LoginFami']; ?></td>
        <td><?php echo$lin['PasswdFami']; ?></td>
        
        <td><a href="index.php?cmd=del-fami&cod=<?php echo$lin['CodFami'];?>">Apagar</a></td>
        <td><a href="index.php?cmd=edi-fami&cod=<?php echo$lin['CodFami'];?>">Editar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

