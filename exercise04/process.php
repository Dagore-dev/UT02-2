<?php require_once('../templates/header.php'); print_header('Exercise 04') ?>

<?php
  $hours = $_POST['hours'];
  $regular_hour_payment = 12;
  $overtime_hour_payment = 16;

  if(isset($hours))
  {
    $regular_payment = $hours * $regular_hour_payment;
    $overtime_hours = $hours - 40;
    $overtime_payment = 0;

    if ($overtime_hours > 0)
    {
      $overtime_payment = $overtime_hours * ($overtime_hour_payment - $regular_hour_payment);
    }

    $total_payment = $regular_payment + $overtime_payment;

    echo "<p>Your weekly salary goes up to $total_payment euros</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
