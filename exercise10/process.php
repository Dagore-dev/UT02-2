<?php require_once('../templates/header.php'); print_header('Exercise 10') ?>

<?php
  $birth_date = $_POST['birth-date'];

  if (isset($birth_date))
  {
    $timestamp = strtotime($birth_date);
    $month_number = date('m', $timestamp);
    $day_number = date('d', $timestamp);

    $horoscope;

    switch ($month_number) {
      case 1:
        if ($day_number < 20)
        {
          $horoscope = 'Capricorn';
        }
        else
        {
          $horoscope = 'Aquarium';
        }
        break;
      case 2:
        if ($day_number < 19)
        {
          $horoscope = 'Aquarium';
        }
        else
        {
          $horoscope = 'Piscis';
        }
        break;
      case 3:
        if ($day_number < 21)
        {
          $horoscope = 'Piscis';
        }
        else
        {
          $horoscope = 'Aries';
        }
        break;
      case 4:
        if ($day_number < 20)
        {
          $horoscope = 'Aries';
        }
        else
        {
          $horoscope = 'Tauro';
        }
        break;
      case 5:
        if ($day_number < 21)
        {
          $horoscope = 'Tauro';
        }
        else
        {
          $horoscope = 'Gemini';
        }
        break;
      case 6:
        if ($day_number < 21)
        {
          $horoscope = 'Gemini';
        }
        else
        {
          $horoscope = 'Cancer';
        }
        break;
      case 7:
        if ($day_number < 22)
        {
          $horoscope = 'Cancer';
        }
        else
        {
          $horoscope = 'Leo';
        }
        break;
      case 8:
        if ($day_number < 22)
        {
          $horoscope = 'Leo';
        }
        else
        {
          $horoscope = 'Virgo';
        }
        break;
      case 9:
        if ($day_number < 22)
        {
          $horoscope = 'Virgo';
        }
        else
        {
          $horoscope = 'Libra';
        }
        break;
      case 10:
        if ($day_number < 22)
        {
          $horoscope = 'Libra';
        }
        else
        {
          $horoscope = 'Scorpio';
        }
        break;
      case 11:
        if ($day_number < 20)
        {
          $horoscope = 'Scorpio';
        }
        else
        {
          $horoscope = 'Sagittarius';
        }
        break;
      case 12:
        if ($day_number < 21)
        {
          $horoscope = 'Sagittarius';
        }
        else
        {
          $horoscope = 'Capricorn';
        }
        break;
      default:
        $horoscope = 'Error: Something went wrong.';
        break;
    }

    echo "<p>If you were born on $birth_date your horoscope is $horoscope.</p>";
  }
?>

<?php require_once('../templates/footer.html') ?>
