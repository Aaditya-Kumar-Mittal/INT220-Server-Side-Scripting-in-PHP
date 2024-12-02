<?php
$pattern = "/[\s,,]+/";

$text = "apple, banana, cherry, orange, grape";

$matches = preg_split($pattern, $text);

echo "Split String: <br>";

print_r($matches);

?>