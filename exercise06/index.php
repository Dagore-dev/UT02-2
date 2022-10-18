<?php require_once('../templates/header.php'); print_header('Exercise 06') ?>

<form action="./process.php" method="post">
  <label for="height">Introduce the height</label>
  <input type="number" name="height" id="height" step="any" min="0">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
