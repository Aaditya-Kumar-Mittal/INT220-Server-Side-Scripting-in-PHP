<?php
$cookie_name = "user";
$cookie_value = "Aaditya Kumar";
setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/");
?>


<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create These Cookies</title>
</head>

<body>

  <?php

  

  if (!isset($_COOKIE[$cookie_name])) {
    # code... 
    echo "Cookie Named: " . $cookie_name . " is not set!";
  } else {
    echo "Cookie Named: " . $cookie_name . " is set!";
    echo "<br>";
    echo "Cookie Value: " . $_COOKIE[$cookie_name];
  }
  ?>

</body>

</html>