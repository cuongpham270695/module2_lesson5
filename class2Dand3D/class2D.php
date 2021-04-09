<?php

class Class2D
{
    public float $x;
    public float $y;
    public $xy = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(): array
    {
        array_push($this->xy, $this->x, $this->y);
        return $this->xy;
    }

    public function __toString()
    {
        return "$this->x,$this->y";
    }
}