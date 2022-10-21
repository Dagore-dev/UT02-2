<?php require_once('../templates/header.php'); print_header('Exercise 12') ?>

<form action="./process.php" method="post">
  <ol>
    <li>
      <p>
        What of the following types have more precision in Java?
      </p>

      <label><input type="radio" name="q1" value="0">a) int</label>
      <label><input type="radio" name="q1" value="1" required>b) double</label>
      <label><input type="radio" name="q1" value="0">c) float</label>
    </li>
    <li>
      <p>
        Which language do you use to query a database?
      </p>
      
      <label><input type="radio" name="q2" value="0">a) XML</label>
      <label><input type="radio" name="q2" value="0">b) SELECT</label>
      <label><input type="radio" name="q2" value="1" required>c) SQL</label>
    </li>
    <li>
      <p>
        To insert a hyperlink in your website the tag ... is used.
      </p>

      <label><input type="radio" name="q3" value="0">a) href</label>
      <label><input type="radio" name="q3" value="1" required>b) a</label>
      <label><input type="radio" name="q3" value="0">c) link</label>
    </li>
    <li>
      <p>
        Which directory holds the Linux configuration files?
      </p>

      <label><input type="radio" name="q4" value="1" required>a) /etc</label>
      <label><input type="radio" name="q4" value="0">b) /config</label>
      <label><input type="radio" name="q4" value="0">c) /cfg</label>
    </li>
    <li>
      <p>
        Which of the next types of memory is volatile?
      </p>

      <label><input type="radio" name="q5" value="1" required>a) RAM</label>
      <label><input type="radio" name="q5" value="0">b) EPROM</label>
      <label><input type="radio" name="q5" value="0">c) ROM</label>
    </li>
  </ol>
  
  <button>Submit</button>
</form>

  <?php require_once('../templates/footer.html') ?>