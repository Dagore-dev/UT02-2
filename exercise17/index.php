<?php require_once('../templates/header.php'); print_header('Exercise 17') ?>

<form action="./process.php" method="post">
<label for="int">Integer</label>
  <input type="number" name="int" id="int">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
