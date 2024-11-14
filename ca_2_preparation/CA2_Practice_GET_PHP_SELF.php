<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SELF GET SERVER </title>
</head>

<body>
  <?php
  if (isset($_GET['username']) && isset($_GET['bloodgroup'])) {
    echo "<h1>PHP Get Method from Self File</h1>";
    echo "Welcome " . $_GET["username"];
    echo "<br>";
    echo "Your bloodgroup is " . $_GET["bloodgroup"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    Username : <input type="text" name="username" id="username"> <br>
    BloodGroup : <input type="text" name="bloodgroup"><br>
    <input type="submit" value="Submit">
  </form>

</body>

</html>