<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";  // Default password is empty for localhost
$dbname = "school_management";  // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>