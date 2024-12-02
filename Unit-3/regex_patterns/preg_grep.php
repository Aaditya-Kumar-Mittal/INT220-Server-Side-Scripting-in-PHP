<?php
$pattern = "/^ba/";
$array = ["bat","cat","batman","ball","cab","bar"];
$matches = preg_grep($pattern, $array);
echo "Elements that match the pattern are: <br>";
print_r($matches);

?>