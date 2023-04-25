<?php
require_once('../../private/initialize.php');

if (!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];


if (is_post_request()) {

  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  // $sql = "UPDATE salamander SET ";
  // $sql .= "name='" . $salamander['name'] . "', ";
  // $sql .= "habitat='" . $salamander['habitat'] . "', ";
  // $sql .= "description='" . $salamander['description'] . "' ";
  // $sql .= "WHERE id='" . $id . "'";
  // $sql .= "LIMIT 1";

  $result = update_subject($salamander);
  if($result === true) {
    redirect_to(url_for('salamanders/show.php?id=' . $id));
  } else {
    $errors = $result;
  }
  

  // if($result) {
  //   redirect_to(url_for('salamanders/show.php?id=' . $id));
  // } else {
  //   // UPDATE failed
  //   echo mysqli_error($db);
  //   db_disconnect($db);
  //   exit;
  // }

} else {
  $salamander = find_subject_by_id($id);
}



$pageTitle = "Edit";
include(SHARED_PATH . '/salamander-header.php');
?>
<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Edit Salamander</h1>

<?php echo display_errors($errors); ?>

<!-- add label -->
<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="salamanderName">Name</label><br>
  <input type="text" name="salamanderName" value="<?php echo h($salamander['name']); ?>"/><br>

  <label for="salamanderName">Habitat</label><br>
  <textarea name="habitat"><?php echo h($salamander['habitat']); ?></textarea><br>

  <label for="salamanderName">Description</label><br>
  <textarea name="description"><?php echo h($salamander['description']); ?></textarea><br>

  <input type="submit" value="Edit Salamander" />
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>