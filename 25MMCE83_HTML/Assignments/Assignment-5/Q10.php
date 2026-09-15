<?php

class Person {

    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function display(){
        echo "<br>Name: ".$this->name;
        echo "<br>Age: ".$this->age;
    }
}

class Student extends Person {

    public $roll;
    public $branch;
    public $section;

    function __construct($name, $age, $roll, $branch, $section){
        parent::__construct($name, $age);
        $this->roll = $roll;
        $this->branch = $branch;
        $this->section = $section;
    }

    function displayStudent(){
        parent::display();
        echo "<br>Roll Number: ".$this->roll;
        echo "<br>Branch: ".$this->branch;
        echo "<br>Section: ".$this->section;
    }
}

$s = new Student("Amit", 22, 1122, "MCA", "A");

$s->displayStudent();

?>