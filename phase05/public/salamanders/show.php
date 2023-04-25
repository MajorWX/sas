<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1'; 

// === TURNED INTO A FUNCTION INSTEAD ===
// $sql = "SELECT * FROM salamander ";
// $sql .= "WHERE id='" . $id . "'";
// $result = mysqli_query($db, $sql);
// confirm_result_set($result);

// $salamander = mysqli_fetch_assoc($result);
// mysqli_free_result($result);

$salamander = find_subject_by_id($id);

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

?>

<h2>Salamander Details</h2>

<p><strong>ID:</strong>
<?php echo h($salamander['id'])?></p>

<p><strong>Name:</strong>
<?php echo h($salamander['name'])?></p>

<p><strong>Habitat:</strong>
<br>
<?php echo h($salamander['habitat'])?></p>

<p><strong>Description:</strong>
<br>
<?php echo h($salamander['description'])?></p>

<p><a href="<?= url_for('salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
