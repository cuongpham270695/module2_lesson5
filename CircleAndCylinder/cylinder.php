<?php
include_once "circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculatePerimeter()
    {
        return parent::calculatePerimeter() * $this->height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        return "The cylinder has radius is " . $this->radius .", height = ".$this->height . " and color is " . $this->color;
    }
}