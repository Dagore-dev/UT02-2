<?php require_once('../templates/header.php'); print_header('Exercise 12') ?>

<?php
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  
  if (isset($q1, $q2, $q3, $q4, $q5))
  {
    $total = $q1 + $q2 + $q3 + $q4 + $q5;

    echo "<p>You get $total points.</p>";
  }

?>

<?php require_once('../templates/footer.html') ?>
