<?php require_once('../templates/header.php'); print_header('Exercise 07') ?>

<?php
  $grade1 = $_POST['grade1'];
  $grade2 = $_POST['grade2'];
  $grade3 = $_POST['grade3'];

  if (isset($grade1, $grade2, $grade3))
  {
    $sum = $grade1 + $grade2 + $grade3;
    $result = number_format($sum / 3, 2);

    echo "<p>The mean of $grade1, $grade2, $grade3 is equal to $result</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
