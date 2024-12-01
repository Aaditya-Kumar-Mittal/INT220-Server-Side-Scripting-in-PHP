<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session Handling</title>
</head>

<body>
  <?php
  $msg = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
      if (!empty($_POST['username']) && !empty($_POST['password'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          // Check username and password
          if ($username === 'ABCDEF' && $password === '123456') { // Both values should match exactly
              $_SESSION['username'] = $username;
              $msg = 'You have entered a valid username and password.';
          } else {
              $msg = 'Wrong username or password.';
          }
      } else {
          $msg = 'Please fill in both username and password.';
      }
  }
  ?>

  <h1>PHP Session Handling Form</h1>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <legend>Session Handling Form</legend>
      <h3>Enter your username and password</h3>
      <label for="username">Username: </label>
      <input type="text" name="username" id="username" placeholder="Enter your username" required>
      <br><br>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" placeholder="Enter your password" required>
      <br><br>
      <button type="submit" name="login">Login</button>
      <br><br>
      <h4><?php echo htmlentities($msg); ?></h4>
      <a href="php_session_profile1.php">My Profile</a>
      <a href="php_session_logout1.php">Logout</a>
    </fieldset>
  </form>
</body>

</html>
