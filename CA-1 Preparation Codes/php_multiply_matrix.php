<?php

function multiply($matrix1, $matrix2)
{
  $m1Row = count($matrix1); //count rows in matrix 1
  $m1Col = count($matrix1[0]); //count columns in matrix 1
  $m2Row = count($matrix2); //count rows in matrix 2
  $m2Col = count($matrix2[0]); //count cols in matrix 2

  if ($m1Col !== $m2Row) {
    echo "Error: Matrices cannot be multiplied. The number of columns of the first matrix must equal the number of rows of the second matrix. <br>";
    return;
  }

  $result = array_fill(0, $m1Row, array_fill(0, $m2Col, 0));

  for ($i = 0; $i < $m1Row; $i++) {
    for ($j = 0; $j < $m2Col; $j++) {
      for ($k = 0; $k < $m1Col; $k++) {
        $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
      }
    }
  }

  return $result;
}

$mat1 = [
  [1, 2],
  [1, 1],
];

$mat2 = [
  [1, 2],
  [1, 1],
];

print_r(multiply($mat1, $mat2));

?>