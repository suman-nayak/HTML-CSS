<?php

class Employee {

    public $empName;
    public $empNo;
    public $basicSal;
    public $da;
    public $hra;
    public $grossSal;

    function __construct($empName, $empNo, $basicSal){
        $this->empName = $empName;
        $this->empNo = $empNo;
        $this->basicSal = $basicSal;
    }

    function calGrossSal(){
        $this->da = $this->basicSal * 20 / 100;
        $this->hra = $this->basicSal * 10 / 100;
        $this->grossSal = $this->basicSal + $this->da + $this->hra;
    }

    function showEmpDetails(){
        echo "<br>Employee Name: ".$this->empName;
        echo "<br>Employee Number: ".$this->empNo;
        echo "<br>Basic Salary: ".$this->basicSal;
        echo "<br>DA: ".$this->da;
        echo "<br>HRA: ".$this->hra;
        echo "<br>Gross Salary: ".$this->grossSal;
        echo "<br>";
    }
}

$e1 = new Employee("Tom", 101, 30000);
$e1->calGrossSal();
$e1->showEmpDetails();

$e2 = new Employee("Jerry", 102, 40000);
$e2->calGrossSal();
$e2->showEmpDetails();

?>