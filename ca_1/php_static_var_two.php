<?php

function staticTest()
{

  static $num1 = 2;

  $num1++;

  echo "Static Var Value: " . $num1 . "<br>";
}

staticTest();
staticTest();
staticTest();
staticTest();
staticTest();
?>