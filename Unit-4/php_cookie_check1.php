<?php

setcookie("test_cookie1", "test1", time() + 5);

if (count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled!";
}