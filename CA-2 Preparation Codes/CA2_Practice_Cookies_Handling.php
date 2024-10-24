<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies Handling in PHP</title>
</head>

<body>
  <h1>PHP Handling Cookies</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="cookie_value" id="cookies" placeholder="Enter Cookie Name">
    <br><br>
    <input type="submit" value="Set Cookies" name="set_cookies">
    <br><br>
    <input type="submit" value="Delete Cookies" name="delete_cookies">
    <br><br>
  </form>

  <!-- Create the Cookies -->
  <?php
  if (isset($_POST['set_cookies'])) {
    $cookie_name = "user_cookie"; // Give a specific name to your cookie
    $cookie_value = $_POST['cookie_value']; // Get the value from the input
    setcookie($cookie_name, $cookie_value, time() + 60); // Set cookie for 60 seconds
    echo "Cookie '{$cookie_name}' has been set with value: '{$cookie_value}'<br>";
  }

  // Delete the cookie
  if (isset($_POST['delete_cookies'])) {
    $cookie_name = "user_cookie";
    setcookie($cookie_name, "", time() - 3600); // Set the cookie expiration time to the past
    echo "Cookie '{$cookie_name}' has been deleted.<br>";
  }
  ?>

  <!-- Display the Cookies -->
  <?php
  if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.<br>";

    if (isset($_COOKIE['user_cookie'])) {
      echo "Cookie 'user_cookie' has been set.<br>";
      echo "Value of the cookie is: " . $_COOKIE['user_cookie'] . "<br>";
    }
  } else {
    echo "Cookies are disabled or not set.<br>";
  }
  ?>
</body>

</html>