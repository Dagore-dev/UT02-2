<?php require_once('../templates/header.php'); print_header('Exercise 03') ?>

<?php
  $week_day = $_POST['week-day'];
  $week_day_array = ['1' => 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

  if (isset($week_day))
  {
    echo "<p>$week_day_array[$week_day]</p>";
  }

?>

<?php require_once('../templates/footer.html') ?>
