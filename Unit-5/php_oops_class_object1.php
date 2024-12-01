<?php

class Calculator
{

  private $_fval, $_sval;

  public function __construct($first, $second)
  {
    $this->_fval = $first;

    $this->_sval = $second;
  }

  public function add()
  {
    return $this->_fval + $this->_sval;
  }
  public function subtract()
  {
    return $this->_fval - $this->_sval;
  }
  public function multiply()
  {
    return $this->_fval * $this->_sval;
  }
  public function divide()
  {
    return $this->_fval / $this->_sval;
  }
}

$cal1 = new Calculator(25, 26);

echo $cal1->add();
echo "<br>";
echo $cal1->subtract();
echo "<br>";
echo $cal1->multiply();
echo "<br>";
echo $cal1->divide();
echo "<br>";