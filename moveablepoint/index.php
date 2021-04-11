<?php
include "point.php";
include "moveAblePoint.php";

$point = new Point(3,1);
echo $point . "<br>";
$point -> setXY(5,3);
echo $point;

$movePoint =new moveAblePoint(3,5,2,3);
echo $movePoint . "<br>";
$movePoint->move();
echo $movePoint;