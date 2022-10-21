<?php require_once('../templates/header.php'); print_header('Exercise 19') ?>

<?php
  $int = $_POST['int'];

  if (isset($int))
  {
    $n = (string) abs($int);
    $i = 0;
    $j = strlen($n) - 1;
    $capicua = true;

    while ($i < $j)
    {
      if ($n[$i] === $n[$j])
      {
        $i++;
        $j--;
      }
      else
      {
        $capicua = false;
        $i = $j;
      }
    }

    if ($capicua)
    {
      echo "<p>$int is capicua.</p>";
    }
    else
    {
      echo "<p>$int is not capicua</p>";
    }

  }
?>

<?php require_once('../templates/footer.html') ?>
