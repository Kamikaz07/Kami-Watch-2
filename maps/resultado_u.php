
<?php



function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

$lig=new mysqli("localhost", "rodrigo36626", "leal2021", "rodrigo36626") or 
die ("Problema na ligação ao servidor e base de dados MYSQL");

$c=$_SESSION['nome'];
	$result_markers="select * from markers where NomePaci='vasco'";
$resultado_markers=$lig->query($result_markers);

/*
$c=$_SESSION['nome'];
	$sql="select * from markers where NomePaci='$c'";
	//echo $sql;
	mysql_free_result($res);
	$res=$lig->query($sql); //a utilizar no while
	
	
	while ($lin=$res->fetch_array()){
*/
header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row_markers['NomePaci']) . '" ';
  echo 'address="' . parseToXML($row_markers['address']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';
  echo 'type="' . $row_markers['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>
