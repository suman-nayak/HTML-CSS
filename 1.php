<?php
class Student {
    public $name;
    public $roll;

    // function __construct(){
    //     echo "Non Prama Const";
    // }
    function __construct($name="", $roll=0){
        if($name != "" && $roll != 0){
            $this->name = $name;
            $this->roll = $roll;
        } else {
            $this->name = "Unknown";
            $this->roll = 0;
        }
        echo "Param Const";
    }

    function set_date($n, $r){
        $this->name = $n;
        $this->roll = $r;
    }

    function display(){
        echo "<br>".__METHOD__;
        echo $this->name." ".$this->roll;
    }

    function __destruct(){
        echo "<br>Destructor is called";
    }
}

// $s1 = new Student();
// $s2 = new Student();

// $s1->set_date("Ram", 1);
// $s1->display();
// $s2->set_date("Shayam", 2);
// $s2->display();

$s = new Student("Tom", 1);
$s->display();

$s1 = new Student();
$s1->display();
?>