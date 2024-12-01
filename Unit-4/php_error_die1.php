<?php

if (file_exists('myfile.php')) {
    $file = fopen("myfile.php", "r"); // Open the file in read mode
    // Perform file operations here
    fclose($file); // Close the file after operations
} else {
    exit("Error: The file does not exist."); // Use a clear error message
}
