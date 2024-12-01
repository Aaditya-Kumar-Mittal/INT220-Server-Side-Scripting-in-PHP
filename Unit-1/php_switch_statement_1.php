<?php

$favColor = "blue";

switch ($favColor) {
  case 'red':
    echo "Your favourite color is red.";
    echo "<br>";
    break;
  case 'green':
    echo "Your favourite color is green.";
    echo "<br>";
    break;
  case 'yellow':
    echo "Your favourite color is yellow.";
    echo "<br>";
    break;
  case 'blue':
    echo "Your favourite color is blue.";
    echo "<br>";
    break;
  case 'purple':
    echo "Your favourite color is purple.";
    echo "<br>";
    break;
  default:
    echo "Your favourite color is neither of the above.";
    echo "<br>";
    break;
}

//Omitting break statement
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>