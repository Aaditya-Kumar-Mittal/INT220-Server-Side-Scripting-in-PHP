<?php

$myString = "Aaditya";

$myStr = "Mittal";

function reverseString($s)
{

  $rev = "";

  $len = strlen($s);

  for ($i = $len - 1; $i >= 0; $i--) {
    $rev .= $s[$i];
  }

  return $rev;
}

echo reverseString($myStr);

echo "<br>";

echo reverseString($myString);

echo "<br>";

echo strrev($myStr);

echo "<br>";

echo strrev($myString);

?>