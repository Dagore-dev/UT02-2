<?php require_once('../templates/header.php'); print_header('Exercise 14') ?>

<form action="./process.php" method="post">
  <label for="number">Number</label>
  <input type="number" name="number" id="number">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
