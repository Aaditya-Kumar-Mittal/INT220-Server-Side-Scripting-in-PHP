<?php

function multiplyMatrix($matrix1, $matrix2)
{
  $mat1Row = count($matrix1); // Number of rows in matrix 1
  $mat1Col = count($matrix1[0]); // Number of columns in matrix 1
  $mat2Row = count($matrix2); // Number of rows in matrix 2
  $mat2Col = count($matrix2[0]); // Number of columns in matrix 2

  // Check if matrices can be multiplied (columns of matrix1 must equal rows of matrix2)
  if ($mat1Col !== $mat2Row) {
    echo "Error: Matrices cannot be multiplied. The number of columns of the first matrix must equal the number of rows of the second matrix. <br>";
    return;
  }

  // Initialize the result matrix with zeros
  $result = array_fill(0, $mat1Row, array_fill(0, $mat2Col, 0));

  // Perform matrix multiplication
  for ($i = 0; $i < $mat1Row; $i++) {
    for ($j = 0; $j < $mat2Col; $j++) {
      for ($k = 0; $k < $mat1Col; $k++) {
        $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
      }
    }
  }

  return $result;
}

// Example matrices
$matrix1 = [
  [1, 2, 3],
  [4, 5, 6]
];

$matrix2 = [
  [7, 8],
  [9, 10],
  [11, 12]
];

// Perform matrix multiplication
$result = multiplyMatrix($matrix1, $matrix2);

// Print the result
print_r($result);
?>