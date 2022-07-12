<?php
// Opens a connection to a MySQL server.
$connection=mysqli_connect ("localhost", "rodrigo36626", "leal2021", "rodrigo36626");
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/