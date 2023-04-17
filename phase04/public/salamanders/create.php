<?php
require_once('../../private/initialize.php');

if (is_post_request()) {

  $salamanderName = $_POST['salamanderName'] ?? '';
  $habitat = $_POST['habitat'] ?? '';
  $description = $_POST['description'] ?? '';

  // $sql = "INSERT INTO salamander ";
  // $sql .= "(name, habitat, description) ";
  // $sql .= "VALUES (";
  // $sql .= "'" . $salamanderName . "', ";
  // $sql .= "'" . $habitat . "', ";
  // $sql .= "'" . $description . "'";
  // $sql .= ")";

  // $result = mysqli_query($db, $sql);

  $result = insert_subject($salamanderName, $habitat, $description);
  $new_id = mysqli_insert_id($db);


  redirect_to(url_for('salamanders/show.php?id=' . $new_id));
} else {
  redirect_to(url_for('/salamanders/new.php'));
}

?>