<?php
//Declare Emtpy Array

$emptyArray = array();

$emptyArray = [];

//Declare Numeric Array

$array1 = array("Red", "Green", "Blue");

foreach ($array1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

$array1[2] = "Yellow";

foreach ($array1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

$array2 = [1, 2, 3, 4, 5, 6];

foreach ($array2 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

//Declare Associative Arrays

$digits1 = array("zero" => 0, "one" => 1, "two" => 2);

foreach ($digits1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

$digits2 = ["zero" => 0, "one" => 1, "two" => 2];

foreach ($digits2 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

//Creating Nested Arrays

$matrix1 = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

foreach ($matrix1 as $key => $value) {

  foreach ($value as $key1 => $value1) {
    echo 'matrix1' . "[$key]" . "[$key1]" . " : " . $value1 . " ";
  }
  echo "<br>";
}

echo "<br>";

$matrix1[1][1] = 15;

foreach ($matrix1 as $key => $value) {

  foreach ($value as $key1 => $value1) {
    echo 'matrix1' . "[$key]" . "[$key1]" . " : " . $value1 * 2 . " ";
  }
  echo "<br>";
}


?>