<?php
$salaries = [
    "Tom"    => 25000,
    "Jerry"  => 37000,
    "Spike"  => 32000,
    "Casper" => 50000,
    "Droopy" => 45000,
    "Mickey" => 42000
];
echo "<ul>";
foreach ($salaries as $name => $sal) {
    echo "<li>Salary of $name  above  25000</li>";
}
echo "</ul>";


echo "<p>
Names: " . implode(", ", array_keys($salaries)) . "</p>";


$total = array_sum($salaries);
echo "<p>Total salary: $total</p>";


$avg = $total / count($salaries);
$aboveAvg = [];
foreach ($salaries as $name => $sal) {
        if ($sal > $avg)
             $aboveAvg[] = $name;


}
echo " <p> above average sal:". implode(" , " , $aboveAvg) . "</p>";



asort($salaries);
$byname = $salaries;
ksort($byname);
echo "<p>Alphabetical order: "; 
echo " <br> ";
foreach ($byname as $name => $sal) {
    echo "$name=$sal ";
}
echo "</p>";


arsort($salaries);
echo "<ol>";
foreach ($salaries as $name => $sal) {
    echo "<li>$name: $sal</li>";
}
echo "</ol>";


arsort($salaries);
echo "<ol>";
foreach ($salaries as $name => $sal) {
    echo "<li>$name: $sal</li>";
}
echo "</ol>";

$sortedBySal = $salaries;
arsort($sortedBySal);
echo "<p>Sorted by salary: ";
foreach ($sortedBySal as $name => $sal) {
    echo "$name($sal) ";
}
echo "</p>";

$highest = max($salaries);
$highestName = array_search($highest, $salaries);
echo "<p>Highest salary: $highestName ($highest)</p>";

echo '<table class="table table-striped table-bordered">';
echo "<thead><tr><th>Name</th><th>Yearly Salary</th><th>Tax %</th><th>Tax Amount</th></tr></thead>";
echo "<tbody>";
foreach ($salaries as $name => $sal) {
    $yearly = $sal * 12;
    $taxPct = ($yearly > 420000) ? 0.05 : 0.035;
    $taxAmt = $yearly * $taxPct;
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$yearly</td>";
    echo "<td>" . ($taxPct * 100) . "%</td>";
    echo "<td>" . number_format($taxAmt, 2) . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";









?>