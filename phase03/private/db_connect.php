<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.


if($_SERVER['SERVER_NAME'] == 'majorwx.xyz') {
  // Siteground Credentials
  $dbhost = 'localhost';
  $dbuser = 'ufhniitg74txz';
  $dbpass = '~tnE17#g2#4z';
  $dbname = 'dbphwiqkyidx4a';
} else {
  // Localhost Credentials
  $dbhost = 'localhost';
  $dbuser = 'sally';
  $dbpass = 'P@ssword1234';
  $dbname = 'salamanders';
}

$connection == mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_close($connection);

?>