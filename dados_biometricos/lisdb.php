
<div class="card">
  <h1 align="center">Listagem dos Dados Biometricos</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Código </th>
        <th>Paciente</th>
        <th>Data</th>
        <th>Frequência</th>
        <th>Oxigenação</th>
        <th>Temperatura</th>

		<th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
<?php 
$sql="select * from DadosBiometricos DB,Paciente P where DB.NumPaci=P.NumPaci";
//echo $sql;
  
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo $lin['CodDB']; ?></td>
        <td><?php echo $lin['NomePaci']; ?></td>
        <td><?php echo $lin['DataDB']; ?></td>
        <td><?php echo $lin['FreqCard']; ?></td>
        <td><?php echo $lin['OxigSang']; ?></td>
        <td><?php echo $lin['Tempera']; ?></td>

        <td><a href="index.php?cmd=del-db&cod=<?php echo$lin['CodDB'];?>">Apagar</a></td>
        <td><a href="index.php?cmd=edi-db&cod=<?php echo$lin['CodDB'];?>">Editar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>


