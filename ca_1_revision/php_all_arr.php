<?php

$person = array(
  "firstname" => "Aaditya",
  "lastname" => "Kumar Mittal",
  "age" => 25
);

$multiArr = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9),
);

echo "<br>";

$simpleArr = [1, 2, 3, 4, 5, 6];

$arrLen = count($simpleArr);

for ($i = 0; $i < $arrLen; $i++) {
  echo $simpleArr[$i];
  echo "<br>";
}

foreach ($simpleArr as $value) {
  # code...
  echo $value;
  echo "<br>";
}

echo "Looping through assosciative arrays <br>";

foreach ($person as $property => $value) {

  echo "Property: " . $property . " Value: " . $value;
  echo "<br>";
}

$complexArr = array(
  "one" => [1, 2, 3],
  "two" => [2, 3, 1],
  "three" => [3, 2, 1],
  "four" => [4, 5, 6],
);

//Store the length of parent arrays
$complexArrLen = count($complexArr);

//Store all the keys
$myKeys = array_keys($complexArr);

//Store all the values
$myValues = array_values($complexArr);

for ($i = 0; $i < $complexArrLen; $i++) {
  //Print the key
  echo "Key is : " . $myKeys[$i];
  echo "<br>";
  echo "Values for the key is: ";

  //Store len of child arrays
  foreach ($myValues[$i] as $value) {
    echo "Values is: " . $value . " ";
  }
  echo "<br>";
}

?>