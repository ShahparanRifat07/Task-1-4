<?php

require_once 'Animal.php';

// Derived class 2
class Cat extends Animal
{
    public function sound()
    {
        return "Meow Meow!";
    }
}
