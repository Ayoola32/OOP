<?php
// An interface in PHP defines a contract that classes must follow. It specifies methods that a class must implement, but it does not provide any implementation details. Interfaces are useful for ensuring that different classes provide the same methods, allowing for consistent usage of these classes.

// Key Points:
// Interfaces define methods without implementing them.
// Classes that implement an interface must provide implementations for all of its methods.
// A class can implement multiple interfaces, allowing for a flexible and powerful design.



// Interface definition
interface ProductInterface {
    public function setName($name);
    public function getName();
    public function setPrice($price);
    public function getPrice();
}

// Class implementing the interface
class Book implements ProductInterface {
    private $name;
    private $price;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function display() {
        echo "Book: $this->name, Price: $this->price\n";
    }
}

// Create an instance of the Book class
$book = new Book();
$book->setName("PHP for Beginners");
$book->setPrice(30);
$book->display(); // Output: Book: PHP for Beginners, Price: 30





?>