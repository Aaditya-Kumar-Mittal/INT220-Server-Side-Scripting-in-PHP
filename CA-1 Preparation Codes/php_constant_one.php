<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Constants</title>
</head>

<body>
  <h1>Using PHP Constants</h1>

  <?php
  define("Greetings", "Hello, everyone.");

  echo Greetings . " My name is Aaditya Kumar Mittal.";

  const reg_no = 12203627;

  echo "<br>";

  echo Greetings . "My roll number is " . reg_no;

  ?>

  <h1>Using Constant Arrays</h1>

  <?php

  const courses = ["PHP", "ReactJs", "Laravel", "Java"];

  echo courses[0];
  echo "<br>";
  echo courses[1];
  echo "<br>";
  echo courses[2];
  echo "<br>";
  echo courses[3];
  echo "<br>";

  ?>

  <h1>Constants are Globals in PHP.</h1>

  <?php
  
  const WISHES = "Good Morning";

  function test(){
    echo WISHES;
  }

  test();
  ?>
</body>

</html>