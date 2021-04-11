<?php
include_once "point.php";
class moveAblePoint extends Point{
    public $xSpeed = 0;
    public $ySpeed = 0;
    public $speed = [];

    public function __construct($x,$y,$xSpeed,$ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed(int $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed(): int
    {
        return $this->xSpeed;
    }

    public function setYSpeed(int $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSpeed(): int
    {
        return $this->ySpeed;
    }

    public function getSpeed(): array
    {
        return [$this->xSpeed,$this->ySpeed];
    }

    public function __toString()
    {
        return "x,y position: ($this->x,$this->y), and speed is: ($this->xSpeed,$this->ySpeed)";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }
}