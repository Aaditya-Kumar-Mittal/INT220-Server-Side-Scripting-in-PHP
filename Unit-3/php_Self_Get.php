<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example of PHP Get Method</title>
</head>

<body>
  <?php
  if (isset($_GET['name'])) {
    echo "<p> Hi! " . $_GET['name'] . '</p>';
  }
  ?>

  <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
  </form>
</body>

</html>