<?php

$items = [1, 2, 3, 4, 5, 6];

//Count the number of elements

$len = count($items);

echo $len;

echo "<br>";

echo "Printing the array elements <br>";

for ($i = 0; $i < $len; $i++) {
  echo $items[$i] . " ";
}
echo "<br>";

print_r($items);

echo "<br>";

//Adding element at last The  array_push()  function  inserts one  or  more  elements to the end of an array.

array_push($items, 7, 8, 9);

print_r($items);

echo "<br>";

//Add elements in front The array_unshift() adds one or more elements to the beginning of an array.

array_unshift($items, -2, -1, 0);

print_r($items);

echo "<br>";

//Removing the last element Using array_pop() : removes and returns the last element of the array.

echo array_pop($items);

echo "<br>";

print_r($items);

echo "<br>";

//Using array_shift(): removes and returns the first element of the array. 

echo array_shift($items);

echo "<br>";

print_r($items);

echo "<br>";

//The  array_search()  function  search an  array  for  a  value and returns the key.

echo array_search(10, $items);

echo "<br>";

echo array_search(1, $items);

echo "<br>";

$duplicates = [1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 6, 6, 6, 6, 6, 6, 7];

//The  array_count_values()  function is  used to  count  the frequency of all the values in an array. 

print_r(array_count_values($duplicates));

echo "<br>";

//array_merge() to merge one or more arrays

$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "b" => "yellow");
$a3 = array("c" => "orange", "b" => "magenta");
print_r(array_merge($a1, $a2, $a3));

echo "<br>";

//array_combine for key and values array

$numWord = ["One", "Two", "Three"];
$numDigits = [1, 2, 3];
print_r(array_combine($numDigits, $numWord));
echo "<br>";

//The  array_chunk()  function  splits an  array  into  chunks of  newarrays. 

$courses = array("PHP", "Laravel", "Node js", "HTML", "CSS", "ASP.NET");
print_r(array_chunk($courses, 2));
echo "<br>";

//The  array_diff()  function  compares  the  values of  two  (or more) arrays, and returns the differences.

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");
$a3 = array("h" => "magenta", "i" => "seagreen");
$result = array_diff($a1, $a2);
print_r($result);
echo "<br>";

//The array_flip() function flips/exchanges all keys with their associated values in an array.
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
print_r($a1);
echo "<br>";
$result = array_flip($a1);
print_r($result);
echo "<br>";

//The  array_intersect()  function  compares  the  values of  two  (or more) arrays, and returns the matches.
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");
$a3 = array("red", "blue");
$result = array_intersect($a1, $a2, $a3);
print_r($result);
echo "<br>";

//array_reverse

$arr1 = [1, 2, 3, 4, 5, 6];
print_r($arr1);
echo "<br>";
print_r(array_reverse($arr1));
echo "<br>";

$a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
print_r(array_reverse($a));
echo "<br>";

$a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "brown");
print_r(array_slice($a, 1, 2));
echo "<br>";

//array_slice(array, start, length, preserve)
$a = array("red", "green", "blue", "yellow", "brown");
print_r(array_slice($a, 1, 2, true));
echo "<br>";

// The array_column() function returns the values from a single column in the input array. •array_column(array, column_key, index_key) 
$result = array(array('name' => 'Manoj', 'cgpa' => 6.7, 'status' => 'pass'), array('name' => "Shalini", 'cgpa' => 9.8, 'status' => 'pass'), array('name' => 'Mani', 'cgpa' => 3.2, 'status' => 'fail'));
$name = array_column($result, 'name');
print_r($name);
echo "<br>";
$name = array_column($result, 'status', 'name');
print_r($name);
echo "<br>";

//array_sum()

$sumArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo array_sum($sumArr);

echo "<br>";

echo array_product($sumArr);

echo "<br>";

$array = ["a", "b", "c"];
$exists = in_array("b", $array);
echo $exists ? "Exists" : "Does not exist";
echo "<br>";

$array = ["a" => 1, "b" => 2, "c" => 3];
$keyExists = array_key_exists("b", $array);
echo $keyExists ? "Key exists" : "Key does not exist";
echo "<br>";

?>