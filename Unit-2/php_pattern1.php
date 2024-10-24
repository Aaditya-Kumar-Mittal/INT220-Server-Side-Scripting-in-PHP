<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code 2</title>
</head>

<body>
  <?php
  $n = 3;
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= ($n - $i); $j++) {
      echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
      echo "*";
    }
    echo "<br>";
  }

  for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= ($n - $i); $j++) {
      echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
      echo "*";
    }
    echo "<br>";
  }
  ?>
</body>

</html>