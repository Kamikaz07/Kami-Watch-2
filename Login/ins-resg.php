<?php
$NomeUti=$_REQUEST['NomeUti'];
$DatanascUti=$_REQUEST['DatanascUti'];
$LoginUti=$_REQUEST['LoginUti'];
$PasswdUti=$_REQUEST['PasswdUti'];

$nome=$_FILES['FotoUti']['name'];
$path="./dist/img/UtiFoto/";
$dest=$path.$nome;
$orig=$_FILES['FotoUti']['tmp_name'];

//echo "Alguma informação da transferência<br>";
print_r($_FILES);
//echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
    $sql="insert into Utilizador (NomeUti, FotoUti, DatanascUti, LoginUti, PasswdUti) values ('$NomeUti', '$dest', '$DatanascUti', '$LoginUti', md5('$PasswdUti'))";
//echo $sql;
$lig->query($sql) or die("ERRO:Inserção na tabela Utilizador");


/*
echo "Utilizador inserido com o ID:",$lig->insert_id;
echo "Copia do ficheiro '$nome' efectuado com sucesso<br>";
*/
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=home>";

}else{
	echo "Directoria sem direitos de escrita<br>";
}
?> 
