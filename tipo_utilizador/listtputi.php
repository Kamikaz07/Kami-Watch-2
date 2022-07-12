
	<div class="card">
  <h1 align="center">Listagem dos Tipos Utilizador</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Tipo Utilizador</th>
        <th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
<?php
	$sql="select * from TipoUtilizador";
	//echo $sql;
		
	mysql_free_result($res);
	$res=$lig->query($sql); //a utilizar no while
	
	
	while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['CodTputi']; ?></td>
        <td><?php echo$lin['Dsgtu']; ?></td>
		<td><a href=index.php?cmd=del-tputi&cod=<?php echo $lin['CodTputi']; ?>>Apagar</a></td>
		<td><a href=index.php?cmd=edi-tputi&cod=<?php echo $lin['CodTputi']; ?>>Editar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

