<?php
//A method declared as final in a parent class cannot be overridden in a child class.
// final class: Prevents the class from being extended.
// final method: Prevents the method from being overridden in a subclass.


// Ex1
final class Product{
    public $name = 'Product name';
}

// class Book extends Product{
//     // Error: Cannot extend final class Product
// }


// Ex2
class Product2 {
    final public function display() {
        echo "Displaying Product";
    }
}

class Book extends Product2 {
    // public function display() {
    //     // Error: Cannot override final method Product::display()
    // }
}


