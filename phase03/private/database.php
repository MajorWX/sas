<?php

  function db_connect() {

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

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)){
      mysqli_close($connection);
    }
  }

  function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= "_(" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if(!$result_set) {
      exit("Database query failed.");
    }
  }

?>