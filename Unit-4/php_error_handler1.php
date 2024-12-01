<?php
function customError($error_no, $error_str)
{
  echo "<b>Error:</b> [$error_no] $error_str";
}

set_error_handler("customError");

echo ($test);