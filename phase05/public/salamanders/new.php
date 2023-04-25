<?php 
require_once('../../private/initialize.php'); 

if (is_post_request()) {

  $salamander = [];
  $salamander['name'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  // $sql = "INSERT INTO salamander ";
  // $sql .= "(name, habitat, description) ";
  // $sql .= "VALUES (";
  // $sql .= "'" . $salamanderName . "', ";
  // $sql .= "'" . $habitat . "', ";
  // $sql .= "'" . $description . "'";
  // $sql .= ")";

  // $result = mysqli_query($db, $sql);

  $result = insert_subject($salamander);
  if($result !== true) {
    $errors = $result;
  } else {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $new_id));
  }
  

} else {
  //display the blank form
}

if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    // echo "Salamander Name: $salamanderName";
} else {
   // redirect_to(url_for('/salamanders/new.php'));
}

$pageTitle = "Create";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>

<?php echo display_errors($errors); ?>

<!-- add label -->
<form action="<?= url_for('salamanders/new.php'); ?>" method="post">
    <label for="salamanderName">Name</label><br>
    <input type="text" name="salamanderName"/><br>

    <label for="salamanderName">Habitat</label><br>
    <textarea name="habitat"></textarea><br>

    <label for="salamanderName">Description</label><br>
    <textarea name="description"></textarea><br>

    <input type="submit" value="Create Salamander"/>
</form>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>

