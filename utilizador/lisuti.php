<BR>
<div class="card">
  <!-- /.card-header -->
      <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
				<thead>
      <tr>
        <th>Numero</th>
        <th>Nome</th>
        <th>Designação Tipo Utilizador</th>
        <th>Data Nascimento</th>
        <th>Foto</th>
        <th>Login</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
                  <tbody>
    <?php 
$sql="select * from  Utilizador U, TipoUtilizador TU where U.CodTputi=TU.CodTputi";
//echo $sql;
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['NumUti']; ?></td>
        <td><?php echo$lin['NomeUti']; ?></td>
        <td><?php echo$lin['Dsgtu']; ?></td>
        <td><?php echo$lin['DatanascUti']; ?></td>
        <td><?php echo$lin['FotoUti']; ?></td>
        <td><?php echo$lin['LoginUti']; ?></td>
        
        
		
		<td><a href=index.php?cmd=del-uti&cod=<?php echo$lin['NumUti']; ?>>Apagar</a></td>
		<td><a href=index.php?cmd=edi-uti&cod=<?php echo$lin['NumUti']; ?>>Editar</a></td> 
      </tr>
<?php } ?>
    </tbody>
  </table>
              </div>
             </div>

         