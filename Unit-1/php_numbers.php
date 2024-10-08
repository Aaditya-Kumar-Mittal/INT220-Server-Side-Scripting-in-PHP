<?php
// PHP code goes here

$a = 5;
$b = 5.5;
$c = "25";

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump(is_int($a));
echo "<br>";

var_dump(is_int($b));
echo "<br>";


$x = 10.365;
var_dump(is_float($x));
echo "<br>";

//Check if numeric value is infinite
$y = 1.9e411;
var_dump($y);
echo "<br>";

$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>