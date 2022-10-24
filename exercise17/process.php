<?php require_once('../templates/header.php'); print_header('Exercise 17') ?>

<?php
  $int = $_POST['int'];

  if (isset($int))
  {
    $last_digit = ((string) abs((int) $int))[0];
    echo "<p>The first digit of $int is $last_digit.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
