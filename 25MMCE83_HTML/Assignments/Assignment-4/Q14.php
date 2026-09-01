<?php

function getCount(){
    static $count = 0;

    $count++;
    echo "Function called ".$count." time(s)<br>";
}

getCount();
getCount();
getCount();
getCount();
getCount();

?>