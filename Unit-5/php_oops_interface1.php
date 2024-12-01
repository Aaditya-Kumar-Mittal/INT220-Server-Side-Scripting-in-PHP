<?php

interface myInterface
{
  public function getName();
  public function getAge();
}

class Person implements myInterface
{

  public $name, $age;

  public function __construct($name, $age)
  {
    $this->name = $name;

    $this->age = $age;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }
}

$person1 = new Person('Uphar', 25);
$person2 = new Person('Chitra', 22);

echo $person1->getName() . "<br>" . $person1->getAge() . "<br>";
echo $person2->getName() . "<br>" . $person2->getAge() . "<br>";