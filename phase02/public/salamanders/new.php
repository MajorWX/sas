<?php

require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';

if ($test == '404') {
  error_404();
} elseif ($test == '500') {
  error_500();
} elseif ($test == 'redirect') {
  redirect_to(urlFor('/salamanders/index.php'));
}
?>

<?php
$pageTitle = 'Salamanders';
require_once('../../private/shared/salamander-header.php');
?>

<a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>


<h1>Create Salamander</h1>

<form action="<?php echo urlFor('/salamanders/create.php'); ?>" method="post">
  <label for="salamanderName">Name</label>
  <br>
  <input type="text" name="salamanderName">
  <br>
  <input type="submit" value="Create Salamander">
</form>

<?php require_once('../../private/shared/salamander-footer.php'); ?>