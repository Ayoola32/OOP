<?php
// Method chaining is a technique in object-oriented programming where multiple methods are called on the same object in a single statement. This is achieved by having each method return the object itself ($this), allowing subsequent method calls to be chained together.

// Key Points:
// Each method in the chain returns the same object.
// Enables writing concise and readable code.
// Commonly used in builder patterns, configurations, and fluent interfaces.


class Product{
    private $name;
    private $price;
    private $cattegory;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setPrice($price){
        $this->price = $price;
        return $this;
    }

    public function setCategory($category){
        $this->category = $category;
        return $this;
    }

    public function displayAll(){
        echo "Product: $this->name <br>";
        echo "Price: $$this->price <br>";
        echo "Category: $this->category <br>";
    }
}


    $book = (new Product())
        ->setName('MacBook Pro 2024 Laptop')
        ->setPrice(2500)
        ->setCategory('Electronics')
        ->displayAll()
    ;





?>