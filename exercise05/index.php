<?php require_once('../templates/header.php'); print_header('Exercise 05') ?>

<form action="./process.php" method="post">
  <p><code>
    ax + b = 0
  </code></p>

  <label for="a">a</label>
  <input type="number" name="a" id="a">

  <label for="a">b</label>
  <input type="number" name="b" id="b">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
