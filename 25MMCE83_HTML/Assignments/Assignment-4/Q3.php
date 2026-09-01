<?php

$year = 2024;

if($year % 400 == 0){
    echo $year." is a Leap Year";
} else if($year % 100 == 0){
    echo $year." is not a Leap Year";
} else if($year % 4 == 0){
    echo $year." is a Leap Year";
} else {
    echo $year." is not a Leap Year";
}

?>