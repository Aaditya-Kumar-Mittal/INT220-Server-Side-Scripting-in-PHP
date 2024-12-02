<?php

// Function to double each value in the array
function doubleValue($arr)
{
  // Double each element in the array
  foreach ($arr as &$value) {
    $value *= 2; // Double the value
  }

  // Display the modified array inside the function
  echo "Modified array inside the function: ";
  print_r($arr);
  echo "<br>";
}

// Original array
$originalArray = [1, 2, 3, 4, 5];

// Display the original array before the function call
echo "Original array before the function call: ";
print_r($originalArray);
echo "<br>";

// Call the function and pass the array by value
doubleValue($originalArray);

// Display the original array after the function call to show that it is unchanged
echo "Original array after the function call (unchanged): ";
print_r($originalArray);
echo "<br>";

?>