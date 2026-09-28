<?php
abstract class Vehicle {
    protected $brand;
    protected $type;

    function __construct($brand, $type){
        $this->brand = $brand;
        $this->type = $type;
    }

    function start(){
        echo "<br>$this->brand Started";
    }

    abstract function display();
}

class Car extends Vehicle {
    function __construct($brand, $type){
        parent::__construct($brand, $type );
    }

    function display(){
        echo "<br>$this->brand $this->type";
    }
}


$c = new Car("Honda", "4W");
$c->display();
?>