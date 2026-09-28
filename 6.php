<?php
/*
function fn_name(list_of_params){
    // body
    //return 
}
*/
// define
// function greet(){
//     echo "Hello, World!";
// }
// function greet($name){
//     echo "Hello, $name!";
// }
// function greet($name){
//     // echo "Hello, $name!";
//     return "Hello, $name!";
// }

// call
// greet();

// $n = "Amit";
// greet($n);

// $n = "Amrita";
// greet($n);


// $res = greet($n);

// echo $res;

// Pass by value
// function add($a, $b){
//     $c = $a + $b;
//     echo $c;
// }

// Pass  by reference
// function add(&$a, &$b){
//     $a = $a + $b;
// }

// add(10, 20);

$x = 101; 
$y = 201;
// add($x, $y);
// echo $x;

// Default valued parameter
// this param should be at the end of the list
// function add($a, $b, $c=0){
// // function add($a=0, $b, $c){ # error
//     $c = $a + $b + $c;
//     echo $c."<br>";
// }

// function add($a, $b, $c=0, $d=0){
//     $c = $a + $b + $c + $d;
//     echo $c."<br>";
// }

// Varaible length parameter
// function add(...$nums){
// function add($a,$b,...$nums){
//     // echo gettype($nums);
//     // $sum = 0;
//     $sum = $a+$b;
//     for($i=0; $i<count($nums); $i++){
//         $sum += $nums[$i];
//     }
//     echo "<br>Sum = ".$sum;
// }

// function add($a, $b, $c){
//     $c = $a + $b;
//     echo $c;
// }

// add(1, 2);
// add(1,2,3);
// add(1,2,3,4);
// add(1,2,3,4,5);
// add(1,2,3,4,5,6);

// function  greet($name="User") {
//     echo "Hello, $name!";
// }

// greet();
// greet("Bijay");


// global variable

// $globVar = 100;
// $a=1;
// function test(){
//     // global $globVar;
//     // echo $globVar;

//     // echo $GLOBALS['globVar'];

//     global $a;
//     $a = 2;
//     echo $a."<br>";
// }

// test();
// echo $a."<br>";



// static variables
function getCount(){
    static $count = 1;
    $count++;
    echo "<br>Count = ".$count;
}

getCount();
getCount();
getCount();
getCount();
getCount();
?>