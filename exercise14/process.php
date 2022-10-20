<?php require_once('../templates/header.php'); print_header('Exercise 14') ?>

<?php

$number = $_POST['number'];

if (isset($number))
{
  $output = match(true) {
    ($number % 2 === 0 && $number % 5 === 0) => "$number is even and divisible by 5",
    $number % 2 === 0 => "$number is even",
    $number % 5 === 0 => "$number is divisible by 5",
    default => "$number is not a integer"
  };

  echo "<p>$output.</p>";
}

?>

<?php require_once('../templates/footer.html') ?>
