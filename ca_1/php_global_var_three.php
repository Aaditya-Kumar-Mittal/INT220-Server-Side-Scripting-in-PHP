<?php

$num1 = 1;

$num2 = 2;

//Using $GLOBALS instead of global - Another way to use the global variable inside the function is predefined $GLOBALS array.

function sumGlobal()
{

  $sum = $GLOBALS['num1'] + $GLOBALS['num2'];

  return $sum;
}

echo sumGlobal();

?>