<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function getSumOfItems($arr)
{

  $sum = 0;

  $len = count($arr);

  for ($i = 0; $i < $len; $i++) {
    $sum += $arr[$i];
  }

  return $sum;
}

echo getSumOfItems($arr);

?>