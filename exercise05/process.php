<?php require_once('../templates/header.php'); print_header('Exercise 05') ?>

<?php
  $a = $_POST['a'];
  $b = $_POST['b'];

  if(isset($a, $b))
  {
    $result = '';

    if ($a != 0)
    {
      $x = number_format((-1 * $b) / $a, 2);
      $result = "{$a}x + $b = 0 -> x = $x";
    }
    else
    {
      $result = "There is no solution, just b = $b";
    }

    echo "<p>$result.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
