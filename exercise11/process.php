<?php require_once('../templates/header.php'); print_header('Exercise 11') ?>

<?php

$hour = $_POST['hour'];
$minutes = $_POST['minutes'];

if (isset($hour, $minutes))
{
  $remaining_hours = 23 - $hour;
  $remaining_minutes = 60 - $minutes;
  $remaining_seconds_until_midnight = ($remaining_hours * 3600) + ($remaining_minutes * 60);

  printf('<p>From %s:%s to midnight there are %s seconds.</p>', str_pad($hour, 2, '0'), str_pad($minutes, 2, '0'), $remaining_seconds_until_midnight);
}

?>

<?php require_once('../templates/footer.html') ?>
