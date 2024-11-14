<?php

function isPrime($num)
{
  if ($num === 1 || $num === 0)
    return false;

  for ($i = 2; $i * $i <= $num; $i++) {
    if ($num % $i == 0)
      return false;
  }

  return true;
}

$n = 11;

echo "Value of \$n is " . $n;
echo "<br>";

if (isPrime($n)) {
  # code...
  echo $n . " is a prime number.";
  echo "<br>";
}

?>