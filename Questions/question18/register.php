<?php
// Declare variables for error messages and success message
$first_name = $last_name = $email = $password = $confirm_password = "";
$first_name_err = $last_name_err = $email_err = $password_err = $confirm_password_err = "";
$success_message = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate first name
  if (empty($_POST["first_name"])) {
    $first_name_err = "First name is required.";
  } else {
    $first_name = clean_input($_POST["first_name"]);
  }

  // Validate last name
  if (empty($_POST["last_name"])) {
    $last_name_err = "Last name is required.";
  } else {
    $last_name = clean_input($_POST["last_name"]);
  }

  // Validate email
  if (empty($_POST["email"])) {
    $email_err = "Email is required.";
  } else {
    $email = clean_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format.";
    }
  }

  // Validate password
  if (empty($_POST["password"])) {
    $password_err = "Password is required.";
  } else {
    $password = clean_input($_POST["password"]);
    if (strlen($password) < 8) {
      $password_err = "Password must be at least 8 characters.";
    } elseif (!preg_match("/[A-Z]/", $password)) {
      $password_err = "Password must contain at least one uppercase letter.";
    } elseif (!preg_match("/[0-9]/", $password)) {
      $password_err = "Password must contain at least one number.";
    } elseif (!preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $password)) {
      $password_err = "Password must contain at least one special character.";
    }
  }

  // Validate confirm password
  if (empty($_POST["confirm_password"])) {
    $confirm_password_err = "Confirm password is required.";
  } else {
    $confirm_password = clean_input($_POST["confirm_password"]);
    if ($confirm_password !== $password) {
      $confirm_password_err = "Passwords do not match.";
    }
  }

  // If no errors, process the form
  if (empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
    $success_message = "Registration successful! Welcome, $first_name $last_name.";
  }
}

// Function to clean input data to prevent XSS attacks
function clean_input($data)
{
  return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <style>
    .error {
      color: red;
    }

    .success {
      color: green;
    }
  </style>
</head>

<body>
  <h2>User Registration Form</h2>

  <?php if ($success_message): ?>
    <p class="success"><?= $success_message ?></p>
  <?php endif; ?>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- First Name -->
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= $first_name ?>">
    <span class="error"><?= $first_name_err ?></span><br><br>

    <!-- Last Name -->
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= $last_name ?>">
    <span class="error"><?= $last_name_err ?></span><br><br>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?= $email ?>">
    <span class="error"><?= $email_err ?></span><br><br>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?= $password ?>">
    <span class="error"><?= $password_err ?></span><br><br>

    <!-- Confirm Password -->
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" value="<?= $confirm_password ?>">
    <span class="error"><?= $confirm_password_err ?></span><br><br>

    <input type="submit" value="Register">

  </form>
</body>

</html>