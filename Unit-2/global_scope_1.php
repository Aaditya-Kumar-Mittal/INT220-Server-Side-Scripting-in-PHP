<?php
// PHP code goes here

$x = 5;

function Test(){

  $x = 5;
  // echo "<p>Global variable x value is $x </p>"; //gives error
  echo "<p>Local variable x value is $x </p>";
}

Test();

echo "<p>Global variable x value is $x </p>";

?>