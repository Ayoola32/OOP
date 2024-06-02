<?php
// An abstract class in PHP is a class that cannot be instantiated on its own and is meant to be extended by other classes. It can contain abstract methods, which are methods declared without an implementation. Subclasses that inherit from the abstract class must provide implementations for these abstract methods.
// Key Points:
// Abstract classes cannot be instantiated.
// Abstract methods must be implemented by subclasses.
// Abstract classes can contain both abstract methods (without implementation) and concrete methods (with implementation).


// Abstract class
abstract class Product {
    protected $name;
    protected $price;

    // Constructor to initialize properties
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Abstract method (no implementation)
    abstract public function display();

    // Concrete method (with implementation)
    public function getPrice() {
        return $this->price;
    }
}

// Subclass extending the abstract class
class Book extends Product {
    private $author;

    // Constructor to initialize all properties
    public function __construct($name, $price, $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    // Implementing the abstract method
    public function display() {
        echo "Book: $this->name, Price: $this->price, Author: $this->author\n";
    }
}

// Create an instance of the Book class
$book = new Book("PHP for Beginners", 30, "John Doe");
$book->display(); // Output: Book: PHP for Beginners, Price: 30, Author: John Doe

?>





?>