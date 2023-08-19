<?php

require_once 'shape.php';

class Square extends Shape{
    private $width;

    public function __construct($width) {
        $this->width = $width;
    }

    public function area() {
        return pow($this->width,2);
    }
}