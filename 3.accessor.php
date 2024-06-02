<?php
//ACCESSOR
/* PHP OOP accessors include:
   Public - Accessible inside and outside the class.
   Private - Accessible only within the class.
   Protected - Accessible within the class and its subclasses, but not publicly.
   Static - Belongs to the class itself, not instances; accessible without creating an instance.
*/
   


class Product{
    public $color  = "Blue";
    private $price = 20;
    protected $total = 50;
    public static $allTotal = 100;

    private function showColor(){
        echo $this->color;
    }

    public function showPrice(){
        echo $this->price;
    }

    protected function showTotal(){
        echo $this->total;
    }

    static function showAllTotal(){
        echo self::$allTotal;
    }
    
}


$book = new Product();
echo $book->color;       // ACCESS GRANTED has the property is declared public
echo $book->price;       // ACCESS DENIED has the property is declared private
echo $book->total;       // ACCESS DENIED has the property is declared protected which can only be access from subclasses
echo $book->showColor(); // ACCESS DENIED because the method is declared private, even though the property used in the method is public.
echo $book->showPrice(); // ACCESS GRANTED because the method is declared public. The private property becomes accessible when called within the public method.
echo $book->showTotal(); // ACCESS DENIED because the method is declared protected. The protected property still becomes unaccessible when called within the protected method.

Product::showAllTotal();