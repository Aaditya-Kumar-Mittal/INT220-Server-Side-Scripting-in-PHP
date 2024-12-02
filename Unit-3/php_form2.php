<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  $name = $email = $gender = $website = "";
  $nameErr = $emailErr = $genderErr = $websiteErr = "";

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['name'])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST['name']);
    }
    if (empty($_POST['email'])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST['email']);
    }
    if (empty($_POST['gender'])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST['gender']);
    }
    if (empty($_POST['website'])) {
      $websiteErr = "Website is required";
    } else {
      $website = test_input($_POST['website']);
    }
  }
  ?>

  <h1>PHP Form Validation Example</h1>
  <p><span class="error"> * are required fields</span></p>
  <br>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="name">Name:</label>
    <span class="error">* <?php echo $nameErr ?></span>
    <input type="text" name="name" id="name">
    <br><br>
    <label for="email">Email: </label>
    <span class="error">* <?php echo $emailErr ?></span>
    <input type="email" name="email" id="email">
    <br><br>
    <label for="gender">Gender:</label>
    <span class="error">* <?php echo $genderErr ?></span>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other"> Other
    <br><br>
    <label for="website">Website: </label>
    <span class="error">* <?php echo $websiteErr ?></span>
    <input type="text" name="website" id="website">
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <h2>Display the output of the form: </h2>
  <p>Name: <?php echo $name ? $name : "No name provided"; ?></p>
  <p>Email: <?php echo $email ? $email : "No email provided"; ?></p>
  <p>Website: <?php echo $website ? $website : "No website provided"; ?></p>
  <p>Gender: <?php echo $gender ? $gender : "No gender selected"; ?></p>

</body>

</html>