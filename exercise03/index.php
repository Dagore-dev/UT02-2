<?php require_once('../templates/header.php'); print_header('Exercise 03') ?>

<form action="./process.php" method="post">
  <label for="week-day">Enter a number between 1-7</label>
  <input type="number" name="week-day" id="week-day" min="1" max="7">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
