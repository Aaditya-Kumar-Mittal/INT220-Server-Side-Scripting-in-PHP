<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Interface Demo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    .animal-sound {
      margin: 10px 0;
    }
  </style>
</head>

<body>
  <h1>Animal Sounds</h1>
  <div>
    <?php
    interface Animal
    {
      public function makeSound();
    }

    class Cat implements Animal
    {
      public function makeSound()
      {
        echo "<div class='animal-sound'>Cat meows!</div>";
      }
    }

    class Dog implements Animal
    {
      public function makeSound()
      {
        echo "<div class='animal-sound'>Dog barks!</div>";
      }
    }

    class Cow implements Animal
    {
      public function makeSound()
      {
        echo "<div class='animal-sound'>Cow moos!</div>";
      }
    }

    $cat = new Cat();
    $dog = new Dog();
    $cow = new Cow();
    $animals = array($cat, $dog, $cow);

    foreach ($animals as $animal) {
      $animal->makeSound();
    }
    ?>
  </div>
</body>

</html>