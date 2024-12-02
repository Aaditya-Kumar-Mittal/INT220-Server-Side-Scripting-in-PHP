<?php
setcookie("test_cookie_1", "test", time() + 3600, '/');
setcookie("test_cookie_2", "test", time() + 3600, '/');
setcookie("test_cookie_3", "test", time() + 3600, '/');
setcookie("test_cookie_4", "test", time() + 3600, '/');
?>
<html>

<body>

  <?php
  if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    echo "<br>";
    echo count($_COOKIE);
  } else {
    echo "Cookies are disabled.";
  }
  ?>

</body>

</html>