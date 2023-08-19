<?php

class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sound()
    {
        return "..........";
    }

    public function getName(){
        return $this->name;
    }
}
