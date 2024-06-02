<?php
// It allows a class (child class) to inherit properties and methods from another class (parent class).

// Parent class
class Product {
    // Properties
    public $name;
    public $price;

    // Constructor to initialize properties
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Method to display product details
    public function display() {
        echo "PRODUCT: $this->name, Price: $$this->price";
        echo "<br>";
    }
}


// Derived class (Child class) inheriting from Product(Parent)
class Book extends Product {
    // Additional property specific to Book
    public $author;

    // Constructor to initialize properties, including parent properties
    public function __construct($name, $price, $author) {
        // Call the parent constructor
        parent::__construct($name, $price);
        $this->author = $author;
    }

    // Method to display book details (overrides parent method)
    public function display() {
        echo "BOOK: $this->name, Price: $$this->price, Author: $this->author";
        echo "<br>";
    }
}

// Create an instance of the Product class
$product = new Product("Object Oriented Programming", 20);
$product->display(); // Output: Product: Generic Product, Price: 20

// Create an instance of the Book class - from child class
$book = new Book("PHP OOP for beginner", 25, "Abubakar Sidiq");
$book->display(); // Output: Book: PHP for Beginners, Price: 25, Author: John Doe



?>