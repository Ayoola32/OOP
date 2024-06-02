<?php
// __get()--:  Magic method called when accessing inaccessible or non-existent properties
class Product {
    private $data = array(); // Arrray to hold values


    // Magic __set method to set property values
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }


    // Magic __get method
    public function __get($name) {
        return $this->data[$name];
    }
}

$book = new Product();
$book->price = 20;
echo $book->price;



?>
