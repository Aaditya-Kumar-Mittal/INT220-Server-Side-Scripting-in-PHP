<?php

$books = array(
  "C++" => array("name" => "Beginning with C", "copies" => 8),
  "PHP" => array("name" => "Basics of PHP", "copies" => 10),
  "Laravel" => array("name" => "MVC", "copies" => 3)
);

$booksLen = count($books);

echo $booksLen;

echo "<br>";

$bookKeys = array_keys($books);

for ($i = 0; $i < $booksLen; $i++) {
  echo $bookKeys[$i] . " : ";

  foreach ($books[$bookKeys[$i]] as $key => $value) {
    echo "Book " . $key . " : " . $value . " ";
  }
  echo "<br>";
}

?>