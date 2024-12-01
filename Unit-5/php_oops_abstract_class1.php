<?php

abstract class Base
{
  abstract function printData();
  public function getData()
  {
    echo "Abstract Class Method.<br>";
  }
}

class Child extends Base
{
  public function printData()
  {
    echo "Abstract Class Method Overriden.<br>";

  }
}

$object = new Child();

$object->getData();

$object->printData();