<?php

  //Creating a constant
  define("GREETINGS","Hello, everyone!");
  echo GREETINGS;

  echo "<br>";

  //Using  const keyword
  const myCar = 'Mercedes';
  echo myCar;

  // const cannot be created inside another block scope, like inside a function or inside an if statement.
  // define can be created inside another block scope.

  //constant Arrays
  define("alphaG",["AB","CD","EF"]);
  echo "<br>";
  echo alphaG[0];

  //Constants are automatically global and can be used across the entire script.

  

?>