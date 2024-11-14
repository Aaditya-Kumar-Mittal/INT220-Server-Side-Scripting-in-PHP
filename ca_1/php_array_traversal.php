<?php

$array1 = [1, 2, 3, 4, 5, 6];

$arr1Length = count($array1);

for ($i = 0; $i < $arr1Length; $i++) {

  echo $array1[$i] . "<br>";

}

$colors = array("Red", "Green", "Blue");

foreach ($colors as $key => $value) {
  echo $value . "<br>";
}

?>