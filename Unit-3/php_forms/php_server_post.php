<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Server Demo</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Username : <input type="text" name="name" id="inputName">
    <br>
    <input type="submit" value="Submit">
    <br>
  </form>

  <?php
  if (isset($_POST['name'])) {
    echo "<p>Hi, " . $_POST['name'] . "</p>";
  }
  ?>
</body>

</html>