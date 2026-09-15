<?php

$emp = [
    "Tom" => 25000,
    "Jerry" => 37000,
    "Spike" => 32000,
    "Casper" => 50000,
    "Droopy" => 45000,
    "Mickey" => 42000
];

echo "<h3>Employee Details</h3>";

echo "<ul>";
foreach($emp as $name => $salary){
    echo "<li>Salary of ".$name." is ".$salary."</li>";
}
echo "</ul>";

echo "<h3>Employee Names</h3>";

foreach($emp as $name => $salary){
    echo $name."<br>";
}

$total = 0;

foreach($emp as $name => $salary){
    $total += $salary;
}

echo "<h3>Total Salary: ".$total."</h3>";

$average = $total / count($emp);

echo "Average Salary: ".$average;
echo "<br><br>";

echo "<h3>Employees Above Average Salary</h3>";

foreach($emp as $name => $salary){
    if($salary > $average){
        echo $name." - ".$salary."<br>";
    }
}

ksort($emp);

echo "<h3>Employees in Alphabetical Order</h3>";

foreach($emp as $name => $salary){
    echo $name." - ".$salary."<br>";
}

arsort($emp);

echo "<h3>Salary in Descending Order</h3>";

echo "<ol>";

foreach($emp as $name => $salary){
    echo "<li>Salary of ".$name." is ".$salary."</li>";
}

echo "</ol>";

echo "<h3>Employees Whose Names Start With Vowel</h3>";

foreach($emp as $name => $salary){
    $first = strtolower($name[0]);

    if($first == "a" || $first == "e" || $first == "i" || $first == "o" || $first == "u"){
        echo $name." - ".$salary."<br>";
    }
}

asort($emp);

echo "<h3>Employees Sorted Based on Salary</h3>";

foreach($emp as $name => $salary){
    echo $name." - ".$salary."<br>";
}

$highestSalary = 0;
$highestEmployee = "";

foreach($emp as $name => $salary){
    if($salary > $highestSalary){
        $highestSalary = $salary;
        $highestEmployee = $name;
    }
}

echo "<h3>Highest Salary</h3>";
echo $highestEmployee." gets the highest salary of ".$highestSalary;

echo "<br><br>";

echo '<table class="table table-bordered table-striped">';
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Yearly Salary</th>";
echo "<th>Tax %</th>";
echo "<th>Tax Amount</th>";
echo "</tr>";

foreach($emp as $name => $salary){

    $yearlySalary = $salary * 12;

    if($yearlySalary > 420000){
        $tax = 5;
    } else {
        $tax = 3.5;
    }

    $taxAmount = $yearlySalary * $tax / 100;

    echo "<tr>";
    echo "<td>".$name."</td>";
    echo "<td>".$yearlySalary."</td>";
    echo "<td>".$tax."%</td>";
    echo "<td>".$taxAmount."</td>";
    echo "</tr>";
}

echo "</table>";

?>