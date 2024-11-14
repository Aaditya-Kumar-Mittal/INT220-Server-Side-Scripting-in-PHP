<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SELF POST SERVER </title>
</head>

<body>
  <?php
  if (isset($_POST['username']) && isset($_POST['bloodgroup'])) {
    echo "<h1>PHP POST Method from Self File</h1>";
    echo "Welcome " . $_POST["username"];
    echo "<br>";
    echo "Your bloodgroup is " . $_POST["bloodgroup"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Username : <input type="text" name="username" id="username"> <br>
    BloodGroup : <input type="text" name="bloodgroup"><br>
    <input type="submit" value="Submit">
  </form>

</body>

</html>