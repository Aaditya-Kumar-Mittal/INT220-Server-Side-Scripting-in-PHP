<?php

$n = 25;

for ($i = 1; $i <= $n; $i++) {
  for ($j = 1; $j <= $n - $i + 1; $j++) {
    echo "*";
  }
  echo "<br>";
}

?>