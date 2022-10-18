<?php require_once('../templates/header.php'); print_header('Exercise 01') ?>

<form action="./process.php" method="post">
  <label for="week-day">Week day</label>
  <select name="week-day" id="week-day">
    <option value="0">Monday</option>
    <option value="1">Tuesday</option>
    <option value="2">Wednesday</option>
    <option value="3">Thursday</option>
    <option value="4">Friday</option>
  </select>

  <button>Submit</button>
</form>

<?php require_once('../templates/footer.html') ?>
