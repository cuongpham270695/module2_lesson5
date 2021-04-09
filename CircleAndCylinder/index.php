<?php
include_once "circle.php";
include_once "cylinder.php";

$circle = new Circle(5, "blue");
echo $circle."<br>";
echo "Area of circle is: " . $circle->calculateArea() . "<br>";
echo "Perimeter of circle is: " . $circle->calculatePerimeter() . "<br>" . "<br>";
$cylinder = new Cylinder(5, "yellow", 8);
echo $cylinder. "<br>";
echo "Area of cylinder is: " . $cylinder->calculateArea() . "<br>";
echo "Perimeter of cylinder is: " . $cylinder->calculatePerimeter();