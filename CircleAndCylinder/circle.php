<?php
class Circle{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }

    public function __toString()
    {
        return "The circle has radius = " . $this->radius . " and color is " . $this->color;
    }
}