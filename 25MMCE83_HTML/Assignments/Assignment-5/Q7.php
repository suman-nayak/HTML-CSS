<?php

class Employee {

    public $empId;
    public $empName;
    public $designation;

    function __construct($empId, $empName, $designation){
        $this->empId = $empId;
        $this->empName = $empName;
        $this->designation = $designation;
    }

    function display(){
        echo "<br>Employee ID: ".$this->empId;
        echo "<br>Employee Name: ".$this->empName;
        echo "<br>Designation: ".$this->designation;
        echo "<br>";
    }
}

$e1 = new Employee(101, "Tom", "Manager");
$e1->display();

$e2 = new Employee(102, "Jerry", "Developer");
$e2->display();

$e3 = new Employee(103, "Spike", "Designer");
$e3->display();

?>