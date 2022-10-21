<?php require_once('../templates/header.php'); print_header('Exercise 18') ?>

<?php
  $int = $_POST['int'];

  if (isset($int))
  {
    $n = abs((int) $int);
    $digits = 0;

    if ($n === 0)
    {
      $digits = 1;
    }
    else
    {
      while ($n > 0)
      {
        $n = intdiv($n, 10);
        $digits++;
      }
    }

    echo "<p>$int has $digits digits.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
