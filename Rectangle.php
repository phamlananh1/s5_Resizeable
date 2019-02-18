<?php


include_once 'Resizeable.php';

class Rectangle implements Resizeable
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function resize($percent)
    {
        return $this->calculateArea() + ($this->calculateArea())*$percent/100;
    }

}