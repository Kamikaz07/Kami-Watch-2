<?php
$NomePaci=$_REQUEST['NumPaci'];
$DatanascPaci=$_REQUEST['DataNascPaci'];
$ObservacoesPaci=$_REQUEST['ObservacoesPaci'];
$LoginPaci=$_REQUEST['LoginPaci'];
$PasswdPaci=$_REQUEST['PasswdPaci'];
$NifPaci=$_REQUEST['NifPaci'];
$nome=$_FILES['FotoPaci']['name'];
$path="./dist/img/UtiFoto/";
$dest=$path.$nome;
$orig=$_FILES['FotoPaci']['tmp_name'];

echo "Alguma informação da transferência<br>";
print_r($_FILES);
echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
    $sql="insert into Paciente (NumPaci, FotoPaci, DataNascPaci, ObservacoesPaci, NifPaci, LoginPaci, PasswdPaci) values ('$NomePaci', '$dest', '$DatanascPaci','$ObservacoesPaci','$NifPaci', '$LoginPaci', md5('$PasswdPaci'))";
//echo $sql;
$lig->query($sql) or die("ERRO:Inserção na tabela Pacilizador");



echo "Pacilizador inserido com o ID:",$lig->insert_id;
echo "Copia do ficheiro '$nome' efectuado com sucesso<br>";

echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=home>";

}else{
	echo "Directoria sem direitos de escrita<br>";
}
?> 


