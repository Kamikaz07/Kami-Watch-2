<?php
$NomeUti=$_REQUEST['NomeFami'];
$DatanascUti=$_REQUEST['DataNascFami'];
$LoginUti=$_REQUEST['LoginFami'];
$PasswdUti=$_REQUEST['PasswdFami'];

$nome=$_FILES['FotoFami']['name'];
$path="./dist/img/UtiFoto/";
$dest=$path.$nome;
$orig=$_FILES['FotoFami']['tmp_name'];

//echo "Alguma informação da transferência<br>";
print_r($_FILES);
//echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
    $sql="insert into Famila (NomeFami, FotoFami, DataNascFami, LoginFami, PasswdFami) values ('$NomeUti', '$dest', '$DatanascUti', '$LoginUti', md5('$PasswdUti'))";
//echo $sql;
$lig->query($sql) or die("ERRO:Inserção na tabela Familia");


/*
echo "Utilizador inserido com o ID:",$lig->insert_id;
echo "Copia do ficheiro '$nome' efectuado com sucesso<br>";
*/
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=home>";

}else{
	echo "Directoria sem direitos de escrita<br>";
}
?> 
