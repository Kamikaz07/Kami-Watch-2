<BR>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Pacientes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Paciente</th>
                  <th>Email</th>
                  <th>Data</th>
                  <th>Frequencia</th>
                  <th>Oxigenação</th>
                  <th>Temperatura</th>
                  <th>Editar</td>
                 <!-- <th>Temperatura</th> -->
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
<td><?php echo $lin['NomePaci']; ?></td>
<td><?php echo $lin['LoginPaci']; ?></td>
<td><?php echo $lin['DataDB']; ?></td>
<td><?php echo $lin['FreqCard']; ?></td>
<td><?php echo $lin['OxigSang']; ?></td>
<td><?php echo $lin['Tempera']; ?></td>
<td><a href="index.php?cmd=edi-med&cod=<?php echo$lin['CodDB'];?>">Editar</a></td>
<!---->
  
</tr>

<?php } ?>
</tbody>

</table>
              </div>
              <!-- /.card-body -->
            </div>

         