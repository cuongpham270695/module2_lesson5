<?php
include ("shape.php");
include_once ("circle.php");
include_once ("cylinder.php");
include_once ("rectangle.php");
include_once ("square.php");

$circle = new Circle("circle",5);
echo $circle->show();
echo "Circle area = " . $circle->calculateArea() . "<br>";
echo "Circle perimeter = " . $circle->calculatePerimeter() . "<br>";
$cylinder = new Cylinder("cylinder",5,3);
echo $cylinder->show();
echo "Cylinder area = " . $cylinder->calculateArea() . "<br>";
echo "Cylinder perimeter = " . $cylinder->calculatePerimeter() . "<br>";
echo "Cyliner volume = " . $cylinder->calculateVolume() . "<br>";
$rectangle = new Rectangle("rectangle",12,5);
echo "Rectangle area = " . $rectangle->calculateArea() . "<br>";
echo "Rectangle perimeter = " . $rectangle->calculatePerimeter() . "<br>";
$square = new Square("square",7);
echo "Square area = " .$square->calculateArea() . "<br>";
echo "Square perimeter = " .$square->calculatePerimeter() . "<br>";