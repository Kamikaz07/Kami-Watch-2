<?php
$lig = new mysqli("localhost", "rodrigo36626", "leal2021", "rodrigo36626") or 
die ("Problema na ligação ao servidor e base de dados MYSQL");
$NumPaci=$_SESSION['codi'];
$CodFami=$_REQUEST['LoginFami'];


$sql="select CodFami from Famila where LoginFami='$CodFami'";

mysql_free_result($res);
$res=$lig->query($sql); //a utilizar no while

while ($lin=$res->fetch_array()){ 
     $c=$lin['CodFami']; 
     //echo $c;
      
} 

$sql1="insert into PaciFami (NumPaci, CodFami) values ('$NumPaci', '$c')";
$lig->query($sql1) or die("ERRO:Inserção na tabela PaciFami");
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=familia>";

?> 