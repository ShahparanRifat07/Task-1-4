<?php

require_once 'shape.php';

class Circle extends Shape{
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi()*pow($this->radius,2);
    }
}