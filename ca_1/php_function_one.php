<?php

function course($code, $name)
{
  echo "Course " . $code . " teaches " . $name . ".<br>";
}

course("CSE326", "Internet Programming");
course("INT222", "Advanced Web Development");
course("INT219", "Front-end Web Development");
course("INT220", "PHP Server Side Scripting");

?>