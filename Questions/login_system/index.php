<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: welcome.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include('db_connect.php');

  $username = $_POST['username'];
  $password = md5($_POST['password']); // Use MD5 for simplicity, but bcrypt or argon2 is recommended

  $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Set session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['last_login'] = $user['last_login'];

    // Update last login time in the database
    $update_sql = "UPDATE users SET last_login = NOW() WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("i", $user['id']);
    $stmt->execute();

    // Store login time in session
    $_SESSION['login_time'] = time();

    header("Location: welcome.php");
    exit();
  } else {
    $error = "Invalid username or password!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>

<body>
  <h2>Login</h2>
  <form action="index.php" method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>

  <?php if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
  } ?>
</body>

</html>