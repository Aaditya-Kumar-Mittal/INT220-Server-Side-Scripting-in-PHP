<?php

$n = 25;

for ($i = 0; $i < $n; $i++) {
  for ($j = 0; $j < ($n - $i - 1); $j++) {
    echo "&nbsp; ";
  }
  for ($j = 0; $j < (2 * $i + 1); $j++) {
    echo "*";
  }
  for ($j = 0; $j < 2 * ($n - $i - 1); $j++) {
    echo "&nbsp; ";
  }
  for ($j = 0; $j < (2 * $i + 1); $j++) {
    echo "*";
  }
  echo "<br>";
} 