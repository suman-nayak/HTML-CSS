<?php

namespace Utility;

function getTime(){

    date_default_timezone_set("Asia/Kolkata");

    return date("h:i:s A");

}

function getDate(){

    date_default_timezone_set("Asia/Kolkata");

    return date("d-m-Y");

}

function getOtp(){

    return random_int(100000, 999999);

}

function getCaptcha(){

    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$";

    $captcha = "";

    for($i = 0; $i < 6; $i++){

        $index = random_int(0, strlen($characters) - 1);

        $captcha = $captcha.$characters[$index];

    }

    return $captcha;

}

?>