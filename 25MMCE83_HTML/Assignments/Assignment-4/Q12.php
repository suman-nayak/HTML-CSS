<?php

function area(...$sides){

    if(count($sides) == 1){

        $a = $sides[0];
        return $a * $a;

    } else if(count($sides) == 2){

        $length = $sides[0];
        $breadth = $sides[1];
        return $length * $breadth;

    } else if(count($sides) == 3){

        $a = $sides[0];
        $b = $sides[1];
        $c = $sides[2];

        $s = ($a + $b + $c) / 2;

        return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

    } else {
        return 0;
    }
}

echo "Area of Square = ".area(5)."<br>";

echo "Area of Rectangle = ".area(10, 5)."<br>";

echo "Area of Triangle = ".area(3, 4, 5);

?>