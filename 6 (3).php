<?php
interface Transaction {
    function pay();
}
interface A {

}
interface B {}

class Test{}
class Test2{}

// class CreditCard extends Test implements Transaction, A, B {
class CreditCard extends Test implements Transaction {
    function pay(){
        echo "Paid via Credit Card";
    }
}

class DebitCard implements Transaction {
    function pay(){
        echo "Paid via debit card";
    }
}

$cc =  new CreditCard();
$cc->pay();

$dc = new DebitCard();
$dc->pay();

?>