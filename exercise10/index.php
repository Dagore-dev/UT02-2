<?php require_once('../templates/header.php'); print_header('Exercise 10') ?>

<form action="./process.php" method="POST">
<label for="birth-date">Birth date</label>
<input type="date" name="birth-date" id="birth-date">

<button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
