<?php require_once('../templates/header.php'); print_header('Exercise 08') ?>

<form action="./process.php" method="post">
  <label for="grade1">Grade 1</label>
  <input type="number" name="grade1" id="grade1" step="any">

  <label for="grade2">Grade 2</label>
  <input type="number" name="grade2" id="grade2" step="any">

  <label for="grade3">Grade 3</label>
  <input type="number" name="grade3" id="grade3" step="any">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
