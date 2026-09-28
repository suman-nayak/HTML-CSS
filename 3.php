<?php
class Human {
    protected $name;
    protected $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function display(){
        echo "<br>Name: $this->name Age: $this->age";
    }
}

class Student extends Human {
    protected $roll;

    function __construct($name, $age, $roll){
        $this->roll = $roll;
        parent::__construct($name, $age);
    }

    function display(){
        parent::display();
        echo " Roll: $this->roll";
    }
}

class Employee extends Human {
    protected $salary;
    function __construct($name, $age, $salary){
        parent::__construct($name, $age);
        $this->salary = $salary;
    }

    function display(){
        parent::display();
        echo " Salary: $this->salary";
    }
}

$h = new Human("Tom", 40);
$h->display();

$s = new Student("Jerry", 19, 1122);
$s->display();

$e = new Employee("Spike", 45, 80000);
$e->display();
?>