<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Validation Example</title>
</head>

<body>
  <?php
  $name = $email = $gender = $website = $comment = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $website = test_input($_POST['website']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
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

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <br><br>
    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" placeholder="example@xyz.com">
    <br><br>
    <label for="website">Website: </label>
    <input type="text" name="website" id="website" placeholder="https://example.com">
    <br><br>
    <label for="comment">Comment: </label>
    <textarea name="comment" id="comment" rows="5" cols="40"></textarea>
    <br><br>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" id="female" value="female">Female
    <input type="radio" name="gender" id="male" value="male">Male
    <input type="radio" name="gender" id="other" value="other">Other
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <h2>Display the output of the form: </h2>
  <p>Name: <?php echo $name ? $name : "No name provided"; ?></p>
  <p>Email: <?php echo $email ? $email : "No email provided"; ?></p>
  <p>Website: <?php echo $website ? $website : "No website provided"; ?></p>
  <p>Comment: <?php echo $comment ? $comment : "No comment provided"; ?></p>
  <p>Gender: <?php echo $gender ? $gender : "No gender selected"; ?></p>

</body>

</html>