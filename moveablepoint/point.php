<?php
class Point{
    public  $x;
    public  $y;
    public $xy =[];
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(): array
    {
        return [$this->x,$this->y];
    }
    public function __toString()
    {
     return "($this->x,$this->y)";
    }

}