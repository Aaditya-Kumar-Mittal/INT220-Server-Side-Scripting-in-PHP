<?php

class Vehicle
{
    // Properties
    public $type;
    public $brand;

    public function __construct($type, $brand)
    {
        $this->type = $type;
        $this->brand = $brand;
    }

    public function __destruct()
    {
        echo "The vehicle is $this->type and the brand is $this->brand. <br>";
    }

    protected function intro()
    {
        echo "This is a $this->brand $this->type.<br>";
    }
}

class Car extends Vehicle
{
    public function message()
    {
        echo "Am I a vehicle or a car?<br>";
    }

    public function showIntro()
    {
        $this->intro(); // Calling the protected method
    }
}

$carA = new Car('car', 'Suzuki');
$carA->message();
$carA->showIntro(); // Accessing the intro method via showIntro

$bikeA = new Vehicle('bike', 'Hero');
// $bikeA->intro(); // Uncommenting this line will cause an error
