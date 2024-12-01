<?php

class Vehicle
{

  //Properties
  public $type;
  public $brand;

  function __construct($type, $brand)
  {
    $this->type = $type;

    $this->brand = $brand;

  }

  function set_type($type)
  {
    $this->type = $type;
  }

  function get_type()
  {
    return $this->type;
  }
  function set_brand($brand)
  {
    $this->brand = $brand;
  }

  function get_brand()
  {
    return $this->brand;
  }

  function __destruct()
  {
    echo "The vehicle is $this->type and the brand is $this->brand. <br>";
  }

}

$carA = new Vehicle('car', 'Suzuki');
$bikeA = new Vehicle('bike', 'Hero');
$carA->set_type('car');
$carA->set_brand('Mercedes');
$bikeA->set_type('bike');
$bikeA->set_brand('BMW');

echo $carA->get_type();
echo "<br>";
echo $carA->get_brand();
echo "<br>";
echo $bikeA->get_type();
echo "<br>";
echo $bikeA->get_brand();
echo "<br>";