<?php
// NB; to access properties or methtod outside a class we instantiate or declare to be static
// to access within a class we use $this

class Product{
    // Properties
    public $price = 2;
    public $color = "Black";
    public $total = 0;

    // Method
    function Calc_total(){ 
        $this->total = rand(0, 10*20); // using $this to access a property 
    }

    static function generate_id(){ 
        return rand(0,100);
    }

    function read(){
        $this->Calc_total(); // using this to access a method(function) and call the function
        return $this->total; 
    }
}


//Method instantiate
$book = new Product();
echo $book->read();


