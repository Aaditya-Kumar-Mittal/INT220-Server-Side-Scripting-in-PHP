<?php

$lang = "Java";

function test()
{
  //Call global var
  global $lang;

  echo $lang;

  echo "<br>";
}

test();

?>