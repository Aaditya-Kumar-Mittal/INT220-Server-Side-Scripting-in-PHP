<?php
session_start();

// Check if the user is logged in and session has not expired
if (!isset($_SESSION['user_id']) || (time() - $_SESSION['login_time']) > 600) {
  // If session expired, destroy session and redirect to login page
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit();
}

// Update session time
$_SESSION['login_time'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
</head>

<body>
  <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
  <p>Last login: <?php echo $_SESSION['last_login']; ?></p>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>