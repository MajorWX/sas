<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(urlFor('/salamanders/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';

  echo "Salamander Name: " . $salamanderName . "<br>";
} else {
  //redirect_to(urlFor('/salamanders/new.php'));
}
?>

<?php
$pageTitle = 'Salamanders';
require_once('../../private/shared/salamander-header.php');
?>

<a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>


<h1>Edit Salamander</h1>

<form action="" method="post">
  <label for="salamanderName">Name</label>
  <br>
  <input type="text" name="salamanderName">
  <br>
  <input type="submit" value="Create Salamander">
</form>

<?php require_once('../../private/shared/salamander-footer.php'); ?>