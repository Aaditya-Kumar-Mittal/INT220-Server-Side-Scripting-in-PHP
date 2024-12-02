<!-- registration_success.php -->
<?php
// Check if data is received via GET
if (isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email'])) {
  $firstName = $_GET['first_name'];
  $lastName = $_GET['last_name'];
  $email = $_GET['email'];

  // Display the success message
  echo "<h2>Registration Successful!</h2>";
  echo "<p>First Name: " . htmlspecialchars($firstName) . "</p>";
  echo "<p>Last Name: " . htmlspecialchars($lastName) . "</p>";
  echo "<p>Email: " . htmlspecialchars($email) . "</p>";
} else {
  echo "No data received!";
}
?>