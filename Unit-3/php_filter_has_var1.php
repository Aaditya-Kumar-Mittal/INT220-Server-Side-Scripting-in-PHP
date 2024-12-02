<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

<?php
if (isset($_REQUEST['submit'])) {
  if (!filter_has_var(INPUT_POST, "name")) {
    echo ("Name not found");
  } else {
    echo ("Name found");
  }
}
?>
</html>