<?php require_once('../templates/header.php'); print_header('Exercise 02') ?>

<?php
  $hours = $_POST['hours'];

  if (isset($hours))
  {
    $greet =  match ($hours) {
      '6', '7', '8', '9', '10', '11', '12' => 'Good morning',
      '13', '14', '15', '16', '17', '18', '19', '20' => 'Good afternoon',
      '21', '22', '23', '0', '1', '2', '3', '4', '5' => 'Good night',
      default => 'An integer between 0 and 23 (both included) is expected'
    };

    echo "<p>$greet.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
