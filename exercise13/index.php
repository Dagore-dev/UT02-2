<?php require_once('../templates/header.php'); print_header('Exercise 13') ?>

<form action="./process.php" method="post">
  <label for="num1">Integer 1</label>
  <input type="number" name="num1" id="num1">

  <label for="num2">Integer 2</label>
  <input type="number" name="num2" id="num2">

  <label for="num3">Integer 3</label>
  <input type="number" name="num3" id="num3">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
