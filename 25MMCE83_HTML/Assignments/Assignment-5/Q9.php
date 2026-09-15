<?php

class Complex {

    public $real;
    public $img;

    function __construct($real, $img){
        $this->real = $real;
        $this->img = $img;
    }

    function display(){
        if($this->img >= 0){
            echo $this->real."+".$this->img."i";
        } else {
            echo $this->real.$this->img."i";
        }
    }
}

$c1 = new Complex(5, 3);
$c2 = new Complex(2, 4);

echo "First Complex Number: ";
$c1->display();

echo "<br>Second Complex Number: ";
$c2->display();

$addReal = $c1->real + $c2->real;
$addImg = $c1->img + $c2->img;

echo "<br>Addition: ";
$add = new Complex($addReal, $addImg);
$add->display();

$subReal = $c1->real - $c2->real;
$subImg = $c1->img - $c2->img;

echo "<br>Subtraction: ";
$sub = new Complex($subReal, $subImg);
$sub->display();

$mulReal = ($c1->real * $c2->real) - ($c1->img * $c2->img);
$mulImg = ($c1->real * $c2->img) + ($c1->img * $c2->real);

echo "<br>Multiplication: ";
$mul = new Complex($mulReal, $mulImg);
$mul->display();

?>