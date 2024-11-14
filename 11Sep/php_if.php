<?php

$a = 200;
$b = 300;
$c = 10;

$d = "Print True";

if ($a < $b && $c < $b) {
  echo $d;
  echo "<br>";
}

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
  echo "Both conditions are true";
  echo "<br>";
}

//Check if number between 2 and 7
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
  echo "<br>";
}

?>