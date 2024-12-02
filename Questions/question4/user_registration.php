<?php
// Initialize error messages
$email_error = $password_error = $security_error = "";
$email = $password = $security_answer = "";

// Process the form when submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $password = $_POST['password'];
  $security_answer = trim($_POST['security_answer']);

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Invalid email format.";
  }

  // Validate password strength
  if (strlen($password) < 8 || !preg_match('/[\W_]/', $password)) {
    $password_error = "Password must be at least 8 characters long and include at least one special character.";
  }

  // Validate security answer (ensure it's not empty)
  if (empty($security_answer)) {
    $security_error = "Security question answer is required.";
  }

  // Check if there are no errors
  if (empty($email_error) && empty($password_error) && empty($security_error)) {
    // If validation passes, you can process the data (e.g., save to a database)
    echo "<p>Registration successful! Thank you for providing your details.</p>";
    // Clear input fields after success
    $email = $password = $security_answer = "";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
</head>

<body>
  <h1>User Registration</h1>
  <form action="" method="post">
    <!-- Email -->
    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
    <br>
    <span style="color: red;"><?php echo $email_error; ?></span>
    <br><br>

    <!-- Password -->
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required>
    <br>
    <span style="color: red;"><?php echo $password_error; ?></span>
    <br><br>

    <!-- Security Question -->
    <label for="security_answer">What is your favorite color? (Security Question)</label><br>
    <input type="text" name="security_answer" id="security_answer"
      value="<?php echo htmlspecialchars($security_answer); ?>" required>
    <br>
    <span style="color: red;"><?php echo $security_error; ?></span>
    <br><br>

    <!-- Submit -->
    <button type="submit">Register</button>
  </form>
</body>

</html>