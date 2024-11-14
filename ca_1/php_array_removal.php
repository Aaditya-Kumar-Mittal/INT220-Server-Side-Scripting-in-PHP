<?php
//Declare Numeric Array

$array1 = array("Red", "Green", "Blue");

foreach ($array1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

unset($array1[1]);

foreach ($array1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

$digits1 = array("zero" => 0, "one" => 1, "two" => 2);

foreach ($digits1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

echo "<br>";

unset($digits1['two']);

foreach ($digits1 as $key => $value) {
  echo $key . " : " . $value . "<br>";
}

?>