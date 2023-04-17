<?php

function find_all_subjects()
{
  global $db;

  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY name ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_subject_by_id($id)
{
  global $db;

  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);

  $salamander = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $salamander; //Returns an assoc array
}

function insert_subject($salamanderName, $habitat, $description)
{
  global $db;

  $sql = "INSERT INTO salamander ";
  $sql .= "(name, habitat, description) ";
  $sql .= "VALUES (";
  $sql .= "'" . $salamanderName . "', ";
  $sql .= "'" . $habitat . "', ";
  $sql .= "'" . $description . "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);

  if($result) {
    return true;

  } else {
    // INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
}
