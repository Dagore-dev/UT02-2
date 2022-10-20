<?php require_once('../templates/header.php'); print_header('Exercise 13') ?>

<?php

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];

  if (isset($num1, $num2, $num3))
  {
    $array = [$num1, $num2, $num3];
    sort($array);
    $output = '';

    foreach ($array as $value)
    {
      $output .= $value . ' ';
    }

    echo "<p>Sorted in ascending order: $output</p>";
  }

?>

<?php require_once('../templates/footer.html') ?>
