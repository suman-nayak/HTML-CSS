<?php

class Product {

    public $name;
    public $price;

    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Book extends Product {

    public $author;

    function __construct($name, $price, $author){
        parent::__construct($name, $price);
        $this->author = $author;
    }
}

class FictionBook extends Book {

    public $genre;

    function __construct($name, $price, $author, $genre){
        parent::__construct($name, $price, $author);
        $this->genre = $genre;
    }

    function display(){
        echo "<br>Book Name: ".$this->name;
        echo "<br>Price: ".$this->price;
        echo "<br>Author: ".$this->author;
        echo "<br>Genre: ".$this->genre;
    }
}

$b = new FictionBook("The Alchemist", 500, "Paulo Coelho", "Fiction");

$b->display();

?>