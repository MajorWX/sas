<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.



require_once('db_credentials.php');

$connection == mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_close($connection);

?>