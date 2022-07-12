	
<div class="card">
  <h1 align="center">Listagem Familia</h1> <br><br>      
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Paciente</th>
        <th>Familiar</th>
		<th></th>

		
      </tr>
    </thead>
    <tbody>
<?php 
$sql="select * from PaciFami PF, Paciente P, Famila F where PF.NumPaci=P.NumPaci and PF.CodFami=F.CodFami";
mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['NomePaci']; ?></td>
        <td><?php echo$lin['NomeFami']; ?></td>
        
        
        <td><a href="index.php?cmd=del-fami-paci&cod=<?php echo$lin['CodFami'];?>">Apagar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>

