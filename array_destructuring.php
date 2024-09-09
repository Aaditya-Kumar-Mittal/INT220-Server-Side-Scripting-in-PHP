<?php
$courses["INT220"] = "PHP";
$courses["INT221"] = "Laravel";
$courses["INT222"] = "Node js";

//printing array structure
print_r($courses);
echo "<br>";

//Looping using forEach loop
foreach ($courses as $key => $value) {
  echo "Key: ".$key." and Value: ".$value;
  echo "<br>";
}

//Looping using for loop
$keys = array_keys($courses);
$values = array_values($courses);
for($x = 0; $x< count($courses);$x++){
  echo "Key = ".$keys[$x]." and Value = ".$values[$x]."<br>";
}
?>