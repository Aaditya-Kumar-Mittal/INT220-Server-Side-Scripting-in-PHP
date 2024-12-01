<?php

require "php_oops_class1.php";

class Square extends Rectangle
{
  public function isSquare()
  {
    if ($this->length == $this->breadth) {
      return true;
    }
    return false;
  }
}

$obj1 = new Square(4, 4);
$obj2 = new Square(4, 5);

if ($obj1->isSquare()) {
  echo "The given is a square.<br>";
  echo "The area of the square is " . $obj1->getArea()."<br>";
}
else{
  echo "The given is a rectangle.<br>";
  echo "The area of the rectangle is " . $obj1->getArea()."<br>";
}

if ($obj2->isSquare()) {
  echo "The given is a square.<br>";
  echo "The area of the square is " . $obj2->getArea()."<br>";
}
else{
  echo "The given is a rectangle.<br>";
  echo "The area of the rectangle is " . $obj2->getArea()."<br>";
}