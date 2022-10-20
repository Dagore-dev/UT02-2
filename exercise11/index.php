<?php require_once('../templates/header.php'); print_header('Exercise 11') ?>

<form action="./process.php" method="post">
  <label for="hour">Hour</label>
  <input type="number" name="hour" id="hour" min="0" max="23">

  <label for="minutes">Minutes</label>
  <input type="number" name="minutes" id="minutes" min="0" max="59">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
