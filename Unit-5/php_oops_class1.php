<?php

class Rectangle
{
  public $length = 0;
  public $breadth = 0;

  function __construct($length, $breadth)
  {
    $this->length = $length;

    $this->breadth = $breadth;
  }

  public function getPerimeter()
  {
    return 2 * ($this->length + $this->breadth);
  }

  public function getArea()
  {
    return $this->length * $this->breadth;
  }
}