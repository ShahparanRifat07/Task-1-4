<?php

require_once 'Animal.php';

// Derived class 2
class Goat extends Animal
{
    public function sound()
    {
        return "Meahhh Meahhh!";
    }
}
