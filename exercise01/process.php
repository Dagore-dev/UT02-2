<?php require_once('../templates/header.php'); print_header('Exercise 01') ?>

<?php
  $week_day = $_POST['week-day'];
  $week_day_array = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
  $week_day_subjects = ['Entrepreneurship', 'Backend', 'Backend', 'English', 'English'];

  if (isset($week_day)) 
  {
    echo "<p>$week_day_array[$week_day] we study $week_day_subjects[$week_day] in the first hour.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
