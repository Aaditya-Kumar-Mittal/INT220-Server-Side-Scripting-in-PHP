<?php

echo "Using '$' to match the end of the string";

$pattern5 = "/^abc/";

$text = "abc123 abcdef 123abc";

preg_match_all($pattern5, $text, $matches);

echo "Matches for '^abc' : \n";

print_r($matches);

echo "<br>";

print_r($matches[0]);

?>