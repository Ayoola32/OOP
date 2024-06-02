<?php
// Traits in PHP are a mechanism for code reuse in single inheritance languages like PHP. They allow you to include methods from multiple classes in a single class, overcoming the limitation of single inheritance.

// Key Points:
// Traits allow you to reuse code across different classes.
// Traits can contain methods and properties.
// A class can use multiple traits.



// Define a trait
trait Logger {
    public function log($message) {
        echo "Log: $message <br>";
    }
}

// Define another trait
trait PriceCalculator {
    public function calculatePrice($price, $tax) {
        return $price + ($price * $tax);
    }
}

// Class using the traits
class Product {
    use Logger, PriceCalculator;

    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function display() {
        $this->log("Displaying product");
        echo "Product: $this->name, Price: " . $this->calculatePrice($this->price, 0.2) . "<br>";
    }
}

// Create an instance of the Product class
$product = new Product("Laptop", 1000);
$product->display();







// Example 2
trait Logger2{
    function log($mssg){
        echo "Log: {$mssg} <br>";
    }
}


class Product2{
    use Logger2;

    function display(){
        $this->log("Welcome to my new oop class");
    }
}

$product2 = new Product2();
$product2->display();
?>
