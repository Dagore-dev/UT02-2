<?php require_once('../templates/header.php'); print_header('Exercise 09') ?>

<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];

  if (isset($a, $b, $c))
  {
    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;

    $inner_sqrt = (($b * $b) - (4 * $a * $c));
    
    if ($inner_sqrt >= 0)
    {
        $sqrt = sqrt($inner_sqrt);

        if ($a !== 0)
        {
          $positive_result = number_format((-$b + $sqrt) / (2 * $a), 2);

          if ($inner_sqrt == 0)
          {
            echo "<p>The given equation has only one solution: $positive_result.</p>";
          }
          else
          {
            $negative_result = number_format((-$b - $sqrt) / (2 * $a), 2);
  
            echo "The given equation has two solutions: $positive_result and $negative_result.";
          }
        }
        else
        {
          if ($b !== 0)
          {
            $linear_solution = -$c / $b;

            echo "<p>The given equation has only one solution: $linear_solution.</p>";
          }
          else
          {
            echo "<p>The given equation has infinite solutions.</p>";
          }
        }

    }
    else
    {
      echo '<p>The given equation doesn\'t have real solution.</p>';
    }
  }
?>

<?php require_once('../templates/footer.html') ?>
