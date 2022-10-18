<?php require_once('../templates/header.php'); print_header('Exercise 02') ?>

<form action="./process.php" method="post">
  <label for="hours">Enter the hour and I salute you</label>
  <input type="number" name="hours" id="hours" min="0" max="23">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
