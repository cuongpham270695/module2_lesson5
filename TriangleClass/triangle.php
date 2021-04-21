<?php
include_once "shape.php";

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;

    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setSide1(int $side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide1(): int
    {
        return $this->side1;
    }

    public function setSide2(int $side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide3($side3): void
    {
        $this->side3 = $side3;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        return sqrt(($this->side1+$this->side2+$this->side3)*($this->side1+$this->side2-$this->side3)*($this->side1+$this->side3-$this->side2)*($this->side2+$this->side3-$this->side1))/4;
    }

    public function __toString()
    {
        return "Side 1: $this->side1<br> Side 2: $this->side2<br>Side 3: $this->side3<br>Perimeter: " .$this->getPerimeter() . "<br> Area: ". $this->getArea();
    }
}
$triangle = new Triangle("triangle1",5,8,7);
echo $triangle;