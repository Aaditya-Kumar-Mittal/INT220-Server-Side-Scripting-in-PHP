<?php
$servername = "localhost";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "user_login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>