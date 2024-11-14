<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators in PHP</title>

  <style>
    .container {
      display: flex;
      background-color: rgb(22, 66, 60);
      width: 60%;
      padding: 25px;
      margin: 50px   auto;
      justify-content: space-evenly;
      flex-wrap: wrap;
      flex-direction: row;
    }

    .box {
      padding: 25px;
      background-color: rgb(106, 156, 137);
      border: 5px solid rgb(233, 239, 236);
      border-radius: 25px;
      color:rgb(233, 239, 236);
      margin: 40px 20px;
      font-size: 30px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      text-align: center;
    }

  </style>
</head>

<body>

  <div class="container">

    <div class="box">
      <h2>Arithmetic Operators</h2>

      <?php

      $x = 10;

      $y = 15;

      echo "$x + $y equals " . ($x + $y);

      echo "<br>";

      echo "$x - $y equals " . ($x - $y);

      echo "<br>";

      echo "$x * $y equals " . ($x * $y);

      echo "<br>";

      echo "$x / $y equals " . ($x / $y);

      echo "<br>";

      echo "$x % $y equals " . ($x % $y);

      echo "<br>";

      echo "$x ** 2 equals " . ($x ** 2);

      echo "<br>";

      ?>
    </div>

    <div class="box">
      <h2>Assignment Operator</h2>

      <?php

      $a = 10;

      echo '$a  = ' . $a;
      echo "<br>";

      echo '$a += 30 equals ' . $a += 30;
      echo "<br>";

      echo '$a -= 20 equals ' . $a -= 20;
      echo "<br>";

      echo '$a *= 10 equals ' . $a *= 10;
      echo "<br>";

      echo '$a /= 10 equals ' . $a /= 10;
      echo "<br>";

      echo '$a %= 10 equals ' . $a %= 10;
      echo "<br>";

      ?>
    </div>

    <div class="box">
      <h2>Comparison Operators</h2>

      <?php

      $x = 25;
      $y = 35;
      $z = "25";

      echo "$x == $z equals ";
      var_dump($x == $z);  // Outputs: boolean true
      echo "<br>";

      echo "$x === \"$z\" equals ";
      var_dump($x === $z); // Outputs: boolean false compares data type too
      echo "<br>";

      echo "$x != $y equals ";
      var_dump($x != $y);  // Outputs: boolean true
      echo "<br>";

      echo "$x !== $z equals ";
      var_dump($x !== $z); // Outputs: boolean true
      echo "<br>";

      echo "$x < $y equals ";
      var_dump($x < $y);   // Outputs: boolean true
      echo "<br>";

      echo "$x > $y equals ";
      var_dump($x > $y);   // Outputs: boolean false
      echo "<br>";

      echo "$x <= $y equals ";
      var_dump($x <= $y);  // Outputs: boolean true
      echo "<br>";

      echo "$x >= $y equals ";
      var_dump($x >= $y);  // Outputs: boolean false
      echo "<br>";

      ?>
    </div>

    <div class="box">
      <h2>Increment and Decrement Operators</h2>

      <?php

      $x = 1000;

      $y = 999;

      echo '$x  = ' . $x;
      echo "<br>";

      echo '$y  = ' . $y;
      echo "<br>";

      echo '$x++  = ' . $x++;
      echo "<br>";

      echo '$y--  = ' . $y--;
      echo "<br>";

      echo '++$x  = ' . ++$x;
      echo "<br>";

      echo '--$y  = ' . --$y;
      echo "<br>";

      echo '$x  = ' . $x;
      echo "<br>";

      echo '$y  = ' . $y;
      echo "<br>";

      ?>
    </div>

    <div class="box">
      <h2>String Operators</h2>

      <?php

      $x = "Hello, ";

      $y = "World!";

      echo $x . $y;

      echo "<br>";

      $x .= $y;

      echo $x;

      ?>
    </div>

    <div class="box">
      <h2>Logical Operators ➡️ and, or, xor, &&, ||, !(not)</h2>

      <?php

      echo "Leap years are divisible by 400 or by 4 and not by 100.";

      echo "<br>";
      function leapYear($year)
      {
        if (($year % 400 == 0) || (($year % 4 == 0) && ($year % 100 != 0))) {
          return true;
        }
        return false;
      }

      $year1 = 2004;

      $year2 = 2015;

      if (leapYear($year1)) {
        echo "$year1 is a leap year.<br>";
      } else
        echo "$year1 is not a leap year.<br>";

      if (leapYear($year2)) {
        echo "$year2 is a leap year.<br>";
      }
      echo "$year2 is not a leap year.<br>";

      ?>

    </div>

</body>

</html>