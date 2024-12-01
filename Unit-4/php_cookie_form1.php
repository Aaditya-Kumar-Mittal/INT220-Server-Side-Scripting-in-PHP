<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Cookie Form</title>
</head>

<body>
  <h1>PHP Cookie Handling Form</h1>
  
  <fieldset>
  <legend>Cookie Handler Form</legend>
    <br>
    <form action="" method="post">
      <label for="user">User: </label>
      <input type="text" name="user" id="user">
      <br>
      <br>
      <input type="submit" value="Set Cookie" name="set">
      <br><br>
      <input type="submit" value="Delete Cookie" name="delete">
      <br><br>
  </fieldset>
  </form>


  <?php
  if (isset($_POST['set'])) {
    $cookie_value = $_POST['user'];
    setcookie('user', $cookie_value, time() + 3600);
  }
  ?>
  <br><br>

  <?php

  if (isset($_COOKIE['user'])) {
    echo "Cookie 'user' has been set.<br>";
    echo "Value is: " . $_COOKIE['user'];
  } else {
    echo "Cookie 'user' has not been set.<br>";
  }

  ?>

  <br><br>

  <?php
  if (isset($_POST['delete'])) {
    setcookie('user', "", time() + 3600);
    echo "COOKIE 'user' has been deleted!";
  }

  ?>
  <br><br>
</body>

</html>