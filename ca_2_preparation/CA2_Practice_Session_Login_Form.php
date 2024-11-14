<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <title>PHP Session Login Form</title>
</head>

<body>

  <?php
  $msg = "";

  if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    if ($_POST['username'] == "123456" && $_POST['password'] == "123456") {
      $_SESSION['username'] = $_POST['username'];

      $msg = 'You have successfully logged in!';
    }
  } else {
    $msg = 'Please enter valid details!';
  }
  ?>

  <h1>PHP Session Login Form</h1>
  <h2>Enter your Username and Password</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    Username : <input type="text" name="username" id="username">
    <br><br>
    Passowrd : <input type="password" name="password" id="password">
    <br><br>
    <input type="submit" value="LogIn" name="login">
    <br><br>
    <?php echo $msg; ?>
    <br><br>
  </form>

  <a href="session_profile.php">Go to Profile</a>
  <a href="session_logout.php">Logout</a>
</body>

</html>