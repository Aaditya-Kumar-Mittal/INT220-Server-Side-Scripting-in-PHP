<?php

$courses["INT220"] = "PHP Server Side Scripting";
$courses["INT221"] = "MVC and Laravel";
$courses["INT222"] = "Advanced Web Development";

print_r($courses);

//Associative Array Traversal For Each Loop

echo "<br>";
echo "<br>";

foreach ($courses as $key => $value) {

  echo "Key : " . $key . " and Value : " . $value . "<br>";
}

//Associative Array Traversal For  Loop

echo "<br>";
echo "<br>";

$cKeys = array_keys($courses);
$cValues = array_values($courses);

for ($i = 0; $i < count($courses); $i++) {
  echo "Courses Key : " . $cKeys[$i] . " and Courses Value : " . $cValues[$i] . "<br>";
}

?>