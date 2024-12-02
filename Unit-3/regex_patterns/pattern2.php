<?php
$pattern1 = "/ba/";

$text = "b baa baaa  bb";

preg_match_all($pattern1, $text, $matches);

echo "Matches for 'ba*' : \n";

print_r($matches);

echo "<br>";

print_r($matches[0]);

?>