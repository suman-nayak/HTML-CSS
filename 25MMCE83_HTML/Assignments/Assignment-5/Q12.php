<?php

abstract class Shape {

    public $dimOne;
    public $dimTwo;

    function __construct($dimOne, $dimTwo){
        $this->dimOne = $dimOne;
        $this->dimTwo = $dimTwo;
    }

    abstract function computeArea();
}

class Rectangle extends Shape {

    function computeArea(){
        return $this->dimOne * $this->dimTwo;
    }
}

class Triangle extends Shape {

    function computeArea(){
        return ($this->dimOne * $this->dimTwo) / 2;
    }
}

$shape = new Rectangle(10, 5);

echo "Rectangle Area: ".$shape->computeArea();

$shape = new Triangle(10, 5);

echo "<br>Triangle Area: ".$shape->computeArea();

?>