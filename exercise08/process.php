<?php require_once('../templates/header.php'); print_header('Exercise 08') ?>

<?php
  $grade1 = $_POST['grade1'];
  $grade2 = $_POST['grade2'];
  $grade3 = $_POST['grade3'];

  if (isset($grade1, $grade2, $grade3))
  {
    $sum = $grade1 + $grade2 + $grade3;
    $result = number_format($sum / 3, 2);

    echo "<p>The mean of $grade1, $grade2, $grade3 is equal to $result</p>";
    
    $bulletin;

    if ($result < 5)
    {
      $bulletin = 'Insufficient';
    }
    elseif ($result < 7)
    {
      $bulletin = 'Sufficient';
    }
    elseif ($result < 9)
    {
      $bulletin = 'Good';
    }
    elseif ($result < 10)
    {
      $bulletin = 'Remarkable';
    }
    else
    {
      $bulletin = 'Outstanding';
    }

    echo "<p>$bulletin.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
