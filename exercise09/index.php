<?php require_once('../templates/header.php'); print_header('Exercise 09') ?>

<form action="./process.php" method="POST">
  <p>
    ax2 + bx +c = 0
  </p>

  <label for="a">a</label>
  <input type="number" name="a" id="a">

  <label for="b">b</label>
  <input type="number" name="b" id="b">

  <label for="c">c</label>
  <input type="number" name="c" id="c">

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
