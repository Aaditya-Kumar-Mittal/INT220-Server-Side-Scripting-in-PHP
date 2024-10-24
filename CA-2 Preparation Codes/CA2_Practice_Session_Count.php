<?php
session_start();
if (isset($_SESSION['count'])) {

  $_SESSION['count'] += 1;

} else {
  $_SESSION['count'] = 1;
}
echo "Your session has been started. <br>";
echo "The sesstion count is {$_SESSION['count']}";
?>