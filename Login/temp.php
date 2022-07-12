<?php
$NumUti=$_SESSION['codi'];
$nome=$_FILES['FotoUti']['name'];
$path="dist/img/UtiFoto/";
$dest=$path.$nome;
$orig=$_FILES['FotoUti']['tmp_name'];

//echo "Alguma informação da transferência<br>";
print_r($_FILES);
echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
    $sql="update Utilizador set FotoUti = '$dest'";
//echo $sql;
$lig->query($sql) or die("ERRO:Inserção na tabela Utilizador");

$_SESSION['foto']=$dest;

echo "Utilizador inserido com o ID:",$lig->insert_id;
echo "Copia do ficheiro '$nome' efectuado com sucesso<br>";

echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=perfil>";

}else{
	echo "Directoria sem direitos de escrita<br>";
}
?> 
