<?php

function matrixTranspose($matrix1)
{
  $transposed = [];

  for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix1[0]); $j++) {
      $transposed[$j][$i] = $matrix1[$i][$j];
    }
  }

  return $transposed;
}


$arr = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

print_r($arr);

echo "<br>";

print_r(matrixTranspose($arr));