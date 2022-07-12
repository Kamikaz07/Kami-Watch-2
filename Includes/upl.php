<!-- upl.php -->
<?php 
$nome=$_FILES['origem']['name'];
$path=".\\imagens\\";
$dest=$path.$nome;
$orig=$_FILES['origem']['tmp_name'];
echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
	echo "Copia do ficheiro '$nome' efectuado com sucesso<br>";
}else{
	echo "Directoria sem direitos de escrita<br>";
}
echo "Alguma informação da transferência<br>";
print_r($_FILES);
?> 
