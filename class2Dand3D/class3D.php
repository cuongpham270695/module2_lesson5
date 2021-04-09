<?php
include_once "class2D.php";

class Class3D extends Class2D
{
    public float $z;
    public $xyz = [];

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ(): array
    {
        array_push($this->xyz, parent::getX(), parent::getY(), $this->xyz);
        return $this->xyz;
    }

    public function __toString()
    {
        return "$this->x,$this->y,$this->z";
    }
}