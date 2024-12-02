<?php

echo "Using '^' to match the start of the string";

$pattern4 = "/^abc/";

$text = "abc123 abcdef 123abc";

preg_match_all($pattern4, $text, $matches);

echo "Matches for '^abc' : \n";

print_r($matches);

echo "<br>";

print_r($matches[0]);

?>