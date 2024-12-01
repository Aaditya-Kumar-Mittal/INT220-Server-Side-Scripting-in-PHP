<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session User Profile</title>
</head>

<body>
  <?php
  if (isset($_SESSION['username'])) {
    # code...
    echo "My username is " . $_SESSION['username'];

    if (isset($_SESSION['count'])) {
      $_SESSION['count'] += 1;
    } else {
      $_SESSION['count'] = 1;
    }

    echo "<br><br>";

    echo "You have visited this page: " . $_SESSION['count'] . " times.";
  } else {
    echo "Please login to see profile.";
  }
  ?>
</body>

</html>