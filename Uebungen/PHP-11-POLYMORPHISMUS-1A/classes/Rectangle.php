<?php

class Rectangle implements Shape
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function calcArea()
    {
        return $this->height * $this->width;
    }


}