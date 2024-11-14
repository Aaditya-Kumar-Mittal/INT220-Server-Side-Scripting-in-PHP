<?php

session_start();

if (isset($_SESSION['username'])) {
  echo "Welcome '{$_SESSION['username']}' to your profile";
} else {
  echo "Please login to your profile";
}