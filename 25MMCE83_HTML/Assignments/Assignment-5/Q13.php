<?php

interface Calculator {

    function add($a, $b);
    function sub($a, $b);
    function mul($a, $b);
    function div($a, $b);
}

class DemoCalculator implements Calculator {

    function add($a, $b){
        return $a + $b;
    }

    function sub($a, $b){
        return $a - $b;
    }

    function mul($a, $b){
        return $a * $b;
    }

    function div($a, $b){
        return $a / $b;
    }
}

$calc = new DemoCalculator();

$a = 20;
$b = 10;

echo "Addition: ".$calc->add($a, $b);
echo "<br>";

echo "Subtraction: ".$calc->sub($a, $b);
echo "<br>";

echo "Multiplication: ".$calc->mul($a, $b);
echo "<br>";

echo "Division: ".$calc->div($a, $b);

?>