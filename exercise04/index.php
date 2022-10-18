<?php require_once('../templates/header.php'); print_header('Exercise 04') ?>

<form action="./process.php" method="post">
  <label for="hours">Introduce your worked hours this week.</label>
  <input type="number" name="hours" id="hours">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
