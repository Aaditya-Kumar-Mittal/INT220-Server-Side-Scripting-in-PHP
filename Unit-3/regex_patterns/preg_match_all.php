<?php

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
preg_match_all($pattern, $str,$matchArr);
print_r($matchArr);