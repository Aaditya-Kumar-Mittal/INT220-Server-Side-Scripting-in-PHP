<?php


//Indexed Array or Inumerated Arrays
$colors_1 = array("red","green","yellow","blue");

$colors_2 = ["red","green","yellow","blue"];

//Accessing array elements
echo "I like ".$colors_1[0].", ".$colors_1[1]." and ".$colors_1[2]." colors.";

echo "<br>";

echo count($colors_1);

//Looping through an array using for loop

$c1_len = count($colors_1);

for ($i=0; $i < $c1_len; $i++) { 
  echo "<h1>".$colors_1[$i]."</h1>";
  echo "<br>";
}

//Looping through an array using for each loop
foreach ($colors_1 as $colors) {
  echo $colors."<br>";
}

//Modifying the array value

foreach ($colors_2 as $colors) {
  echo $colors."<br>";
}
$colors_2[3]= "purple";

foreach ($colors_2 as $colors) {
  echo $colors."<br>";
}

//Looping through an array using 

//Key-Valued Arrays or Associative Array
$person_1 = array("name" => "John", "age" =>30);

$person_2 = array("name" => "Johnny", "age" =>35);


?>