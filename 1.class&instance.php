<?php

// Class: Factory / Blueprint / Pattern / Description of an Object
class Car{
    // Properties
    public $color;
    public $model;

    // Method
    function addWheel(){
        echo "From addWheel function";
    }
}
// Object 
$bmw = new Car(); // Instantiation
$bmw->addWheel(); 