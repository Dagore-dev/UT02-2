<?php require_once('../templates/header.php'); print_header('Exercise 06') ?>

<?php
$height = $_POST['height'];
$g = 9.81;

if (isset($height))
{
  $time = number_format(sqrt((2 * $height) / $g), 2);
  echo "<p>It takes $time seconds to fall down.</p>";
}

?>

<?php require_once('../templates/footer.html') ?>
