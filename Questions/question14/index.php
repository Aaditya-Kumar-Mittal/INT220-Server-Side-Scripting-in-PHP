<?php
// Initialize variables for storing error messages and form data
$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }

  // Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  } else {
    $email = $_POST["email"];
  }

  // Validate password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } elseif (strlen($_POST["password"]) < 8) {
    $passwordErr = "Password must be at least 8 characters long";
  } else {
    $password = $_POST["password"];
  }

  // If no errors, form can be processed (e.g., saved to a database)
  if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
    // In a real scenario, you would save the data to the database here.
    echo "Registration successful! Welcome, $name.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>

<body>
  <h2>User Registration</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- Name Field -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    <span style="color: red;"><?php echo $nameErr; ?></span><br><br>

    <!-- Email Field -->
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $email; ?>">
    <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

    <!-- Password Field -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php echo $password; ?>">
    <span style="color: red;"><?php echo $passwordErr; ?></span><br><br>

    <!-- Submit Button -->
    <input type="submit" value="Register">
  </form>
</body>

</html>