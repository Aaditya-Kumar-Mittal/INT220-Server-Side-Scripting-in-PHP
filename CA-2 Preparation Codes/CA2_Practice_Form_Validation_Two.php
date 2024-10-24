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

  $name = $email = $website = $comment = $gender = "";
  $nameError = $emailError = $websiteError = $commentError = $genderError = "";

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
    }

    $website = test_input($_POST["website"]);
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
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <br> <br>
    <label for="username">Username: </label>
    <input type="text" name="username">
    <br>
    <span class="error"><?php echo $nameError; ?></span>
    <br> <br>
    <label for="email">Email: </label>
    <input type="text" name="email">
    <br>
    <span class="error"><?php echo $emailError; ?></span>
    <br> <br>
    <label for="website">Website: </label>
    <input type="text" name="website">
    <br> <br>
    <label for="comment">Comments</label>
    <textarea name="comment" id="comment" rows="5" cols="40"></textarea>
    <br><br>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" id="gender" value="female">Female
    <input type="radio" name="gender" id="gender" value="male">Male
    <input type="radio" name="gender" id="gender" value="other">Other
    <br>
    <span class="error"><?php echo $genderError; ?></span>
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  echo "<h1> Displaying Your Input: </h1>";
  echo "<br>";
  echo "Your name: " . $name;
  echo "<br>";
  echo "Your gender: " . $gender;
  echo "<br>";
  echo "Your email: " . $email;
  echo "<br>";
  echo "Your website: " . $website;
  echo "<br>";
  ?>
</body>

</html>