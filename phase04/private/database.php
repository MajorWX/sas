<?php

  function db_connect() {

    require_once('db_credentials.php');

    

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