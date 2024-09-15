<?php

function doubleIt(&$value)
{

  $value *= 2;

  return $value;
}

$num = 5;

echo $num;

echo "<br>";

//After function

doubleIt($num);

echo $num;