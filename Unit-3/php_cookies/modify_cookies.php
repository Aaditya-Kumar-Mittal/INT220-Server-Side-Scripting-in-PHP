<?php
$cookie_name = "user";
$cookie_value = "Aaditya Kumar";

// Set the initial cookie if it is not already set
if (!isset($_COOKIE[$cookie_name])) {
  setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");
}

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modify Cookies</title>
</head>

<body>

  <?php
  if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie Named: " . $cookie_name . " is not set!";
  } else {
    // Display the current cookie value
    echo "Cookie Named: " . $cookie_name . " is set!";
    echo "<br>";
    echo "Cookie Value: " . $_COOKIE[$cookie_name];
    echo "<br><br>";

    // Modify the cookie value
    $new_cookie_value = "Aaditya Kumar Mittal";
    setcookie($cookie_name, $new_cookie_value, time() + 86400 * 30, "/");

    echo "Cookie Named: " . $cookie_name . " has been modified!";
    echo "<br>";
    echo "Reload the page to see the updated value.";
  }
  ?>

</body>

</html>