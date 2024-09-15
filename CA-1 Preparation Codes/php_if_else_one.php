<?php
function checkOddEven($num)
{
  if ($num % 2 == 0)
    return "Even";
  else
    return "Odd";

}

echo '2 is ' . checkOddEven(2);
echo "<br>";
echo '3 is ' . checkOddEven(3);

?>