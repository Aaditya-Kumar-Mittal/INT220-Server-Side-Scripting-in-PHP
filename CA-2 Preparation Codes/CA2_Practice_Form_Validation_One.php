<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Validation One</title>
</head>

<body>

  <?php
  $name = $email = $website = $comment = $gender = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $gender = test_input($_POST["gender"]);
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
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <br> <br>
    <label for="username">Username: </label>
    <input type="text" name="username">
    <br> <br>
    <label for="email">Email: </label>
    <input type="text" name="email">
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
  echo "Your email: " .$email;
  echo "<br>";
  echo "Your website: " . $website;
  echo "<br>";
  ?>
</body>

</html>