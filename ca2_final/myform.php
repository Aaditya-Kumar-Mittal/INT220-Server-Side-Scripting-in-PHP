<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Validation One</title>
  <style>
    .error {
      color: red;
    }

  </style>
</head>

<body>

  <?php

  $name = $email = $comment = $gender = "";

  $nameError = $emailError = $commentError = $genderError = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
      $nameError = "Name is required";
    } else {
      $name = test_input($_POST["username"]);
    }

    if (empty($_POST["gender"])) {
      $genderError = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["email"])) {
      $emailError = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
      }
    }
    $comment = test_input($_POST["comment"]);

  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h1>PHP Form Validation Example</h1>
  <p><span class="error"> * Fields are Required</span></p>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" value="<?php echo htmlspecialchars($name); ?>">
    <br>
    <span class="error"><?php echo $nameError; ?></span>
    <br> <br>
    <label for="email">Email: </label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <br>
    <span class="error"><?php echo $emailError; ?></span>
    <br> <br>
    <label for="comment">Address</label>
    <textarea name="comment" id="comment" rows="5" cols="40"><?php echo htmlspecialchars($comment); ?></textarea>
    <br><br>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" value="female" <?php if ($gender == "female")
      echo "checked"; ?>> Female
    <input type="radio" name="gender" value="male" <?php if ($gender == "male")
      echo "checked"; ?>> Male
    <input type="radio" name="gender" value="other" <?php if ($gender == "other")
      echo "checked"; ?>> Other
    <br>
    <span class="error"><?php echo $genderError; ?></span>
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Displaying Your Input:</h1>";
    echo "<br>";
    echo "Your name: " . htmlspecialchars($name);
    echo "<br>";
    echo "Your gender: " . htmlspecialchars($gender);
    echo "<br>";
    echo "Your email: " . htmlspecialchars($email);
    echo "<br>";
    echo "Your address: " . htmlspecialchars($comment);
  }
  ?>
</body>

</html>