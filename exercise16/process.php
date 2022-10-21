<?php require_once('../templates/header.php'); print_header('Exercise 16') ?>

<?php
  $int = $_POST['int'];

  if (isset($int))
  {
    $last_digit = $int[strlen($int) - 1];
    echo "<p>The last digit of $int is $last_digit.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
