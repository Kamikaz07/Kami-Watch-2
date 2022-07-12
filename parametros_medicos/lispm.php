
<div class="card">
  <h1 align="center">Listagem dos Parametos Medicos</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Código </th>
        <th>Paciente</th>
        <th>Utilizador</th>
        <th>Data</th>
        <th>Frequencia Max</th>
        <th>Frequencia Min</th>
        <th>Oxigenação Max</th>
        <th>Oxigenação Min</th>
        <th>Temperatura Max</th>
        <th>Temperatura Min</th>
		<th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
<?php 
$sql="select * from ParametosMedicos PM, Paciente P, Utilizador U where PM.NumPaci=P.NumPaci and U.NumUti=PM.NumUti";
//echo $sql;
  
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while


while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo $lin['CodPM']; ?></td>
        <td><?php echo $lin['NomePaci']; ?></td>
        <td><?php echo$lin['NomeUti'];   ?></td>
        <td><?php echo$lin['DataPM']; ?></td>
        <td><?php echo$lin['FreqCardMin']; ?></td>
        <td><?php echo$lin['FreqCardMax']; ?></td>
        <td><?php echo$lin['OxigSangMin']; ?></td>
        <td><?php echo$lin['OxigSangMax']; ?></td>
        <td><?php echo$lin['TemperaMin']; ?></td>
        <td><?php echo$lin['TemperaMax']; ?></td>
        <td><a href="index.php?cmd=del-pm&cod=<?php echo$lin['CodPM'];?>">Apagar</a></td>
        <td><a href="index.php?cmd=edi-pm&cod=<?php echo$lin['CodPM'];?>">Editar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

