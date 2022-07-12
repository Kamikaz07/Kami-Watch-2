<?php
function getAddress($latitude, $longitude)
{
        //google map api url
         $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyB-Z5EsUyxaZcdQGieXqTt14OBPKWFiw8o";

        // send http request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $address = $json->results[0]->formatted_address;
        return $address;
}
?>
<?php
$lig=new mysqli("localhost", "rodrigo36626", "leal2021", "rodrigo36626") or 
die ("Problema na ligação ao servidor e base de dados MYSQL");
?>
<?php
$c=$_SESSION['nome'];
	$sql="select * from markers where NomePaci='$c'";
	//echo $sql;
	mysql_free_result($res);
	$res=$lig->query($sql); //a utilizar no while
	
	
	while ($lin=$res->fetch_array()){
$latitude = $lin['lat'];
$longitude = $lin['lng'];
$result = getAddress($latitude, $longitude);

echo 'Endereço - ' . $result;
}
// produces output
// Address: 58 Brooklyn Ave, Brooklyn, NY 11216, USA
?>

