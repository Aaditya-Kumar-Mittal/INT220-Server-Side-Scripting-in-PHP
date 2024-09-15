<?php

function staticTest()
{

  static $num1 = 2;

  $num2 = 5;

  $num1++;
  $num2++;

  echo "Static Var Value: " . $num1 . "<br>";
  echo "Non-static Var Value: " . $num2 . "<br>";
}

staticTest();
staticTest();
staticTest();
staticTest();
staticTest();
?>