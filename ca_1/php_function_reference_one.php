<?php

//Passing by reference
function selfMultiply(&$num)
{
  return $num *= $num;
}

$a = 5;
echo selfMultiply($a);

echo "<br>";

$b = 6;
echo selfMultiply($b);

?>