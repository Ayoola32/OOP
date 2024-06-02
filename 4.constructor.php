<?php
// CONSTRUCT
class Product{


    function __construct(){    // Special Method because it triger automatically without calling the function
        echo "Instant created <br>";
    }

    function __destruct(){ // Special Method because it triger automatically without calling the function
        echo "Instant destroyed";
    }

}

$book = new Product(); // Instantiate



?>
