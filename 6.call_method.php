<?php
// __call() method in PHP is a magic method that is automatically triggered when you call a method that doesn't exist or is inaccessible (due to being private or protected) on an object. 


class Product {
    private $data = array(); // Array to hold property values

    // Magic __set method to set property values
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    // Magic __get method to get property values
    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return null;
        }
    }

    // Magic __call method to handle calls to undefined methods
    public function __call($name, $arguments) {
        // Check if the method name starts with "get"
        if (substr($name, 0, 3) == 'get') {
            // Extract the property name from the method name
            $property = lcfirst(substr($name, 3));

            // Return the property value if it exists
            if (isset($this->data[$property])) {
                return $this->data[$property];
            } else {
                return "Property '$property' does not exist.";
            }
        } else {
            return "Method '$name' does not exist.";
        }
    }
}

$book = new Product();

// Setting properties
$book->price = 20;
$book->color = 'Blue';
$book->size = 'Big';

// Getting properties using __get
echo "The price is $" . $book->price; // Output: 20
echo "<br>";
echo "The color is " . $book->color;
echo "<br>";
echo "The size is " . $book->size;
echo "<br>";
echo "<br>";
echo "<br>";

// Getting properties using __call
echo $book->getPrice(); // Output: 20
echo "<br>";
echo $book->getColor(); // Output: Blue
echo "<br>";
echo $book->getTitle(); // Output: Property 'title' does not exist.
echo "<br>";
echo $book->Another(); // Output: Method 'title' does not exist.
echo "<br>";



?>