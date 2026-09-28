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

class McaStudent extends Student {
    protected $branch;
    protected $semester;

    function __construct($name, $age, $roll, $semester){
        parent::__construct($name, $age, $roll);
        $this->roll = $roll;
        $this->branch = "MCA";
        $this->semester = $semester;
    }

    function display(){
        parent::display();
        echo " Branch: $this->branch Sem: $this->semester";
    }
}

$h = new Human("Tom", 40);
$h->display();

$s = new Student("Jerry", 19, 1122);
$s->display();

$m = new McaStudent("Amit", 18, 112233, 3);
$m->display();
?>