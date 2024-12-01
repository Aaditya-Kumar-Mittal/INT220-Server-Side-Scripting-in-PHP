<?php

require "php_oops_class1.php";

$rect1 = new Rectangle(0, 0);

echo $rect1->length;
echo "<br>";
echo $rect1->breadth;
echo "<br>";
$rect1->length = 50;
$rect1->breadth = 30;

echo $rect1->length;
echo "<br>";
echo $rect1->breadth;
echo "<br>";
echo $rect1->getPerimeter();
echo "<br>";
echo $rect1->getArea();