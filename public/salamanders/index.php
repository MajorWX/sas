<!-- require initialize.php -->
<?php require_once('../../private/initialize.php'); ?>

<!-- 
  Write a salamanders array with the following
id=1, salamanderName = Red-Legged Salamander
id=2, salamanderName = Pigeon Mountain Salamander
id=3', salamanderName = ZigZag Salamander
id=4,  salamanderName= Slimy Salamander 
-->
<?php
  $salamanders = array(
    '1' => 'Red-Legged Salamander',
    '2' => 'Pigeon Mountain Salamander',
    '3' => 'ZigZag Salamander',
    '4' => 'Slimy Salamander'
  );
?>


<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->
<?php
  $pageTitle = 'SAS - Salamanders';
  require_once('../../private/shared/salamander-header.php');
?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamanderID => $salamanderName) { 
        print('<tr>
        <td>'.$salamanderID.'</td>
        <td>'.$salamanderName.'</td>
        <td><a href="'.urlFor('salamanders/show.php').'?id='.h(u($salamanderID)).'">View</a></td>
        <td><a href="#">Edit</a></td>
        <td><a href="#">Delete</a></td>
        </tr>');
          
      } ?>
  	</table>

<!--  add the shared path to the salamander footer  -->
<?php require_once('../../private/shared/salamander-footer.php'); ?>
<!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
       