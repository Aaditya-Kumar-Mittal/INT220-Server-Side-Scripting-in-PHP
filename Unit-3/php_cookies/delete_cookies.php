<?php
// Check if the 'user' cookie is set
if (isset($_COOKIE['user'])) {
  // Set the expiration date to one hour ago, effectively deleting the cookie
  setcookie("user", "", time() - 3600, "/"); // Ensure the path matches the one used to set the cookie
  $cookie_deleted = true;
} else {
  $cookie_deleted = false;
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Cookies</title>
</head>

<body>

  <?php
  if ($cookie_deleted) {
    echo "Cookie 'user' is deleted successfully.";
  } else {
    echo "Cookie 'user' does not exist or was already deleted.";
  }
  ?>

</body>

</html>