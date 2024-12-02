<?php
$pattern1 = "/a.b/";

$text = "acb abc a-b";

preg_match_all($pattern1, $text, $matches);

echo "Matches for 'a.b' : \n";

print_r($matches);

?>