<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Forms</title>
</head>
<body>

<?php
    // Check if both 'name' and 'email' are provided
    if (filter_has_var(INPUT_GET, 'name') && filter_has_var(INPUT_GET, 'email')) {
      $name = $_GET['name'];
      $email = $_GET['email'];

      // Display sanitized inputs
      echo "Name: " . htmlspecialchars($name) . "<br>";
      echo "Email: " . htmlspecialchars($email) . "<br>";
    } else {
      echo 'Please provide both your name and email.';
    }
  ?>

  <h2>Submit Your Details</h2>

  <!-- Form for input -->
  <form method="get" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Submit">
  </form>

  
</body>
</html>
