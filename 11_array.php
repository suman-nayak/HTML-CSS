<?php
// $matrix = [
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

// $matrix = array(
//     array(1,2,3),
//     array(4,5,6),
//     array(7,8,9)
// );

$students = array(
    11 => array("name"=>"Tom", "cgpa"=>6.2, "mobile"=>7845236589),
    12 => array("cgpa"=>6.8, "mobile"=>5478963258, "name"=>"Jerry"),
    13 => array( "mobile"=>7854136589, "name"=>"Spike", "cgpa"=>7.2),
    14 => array("name"=>"Droopy", "cgpa"=>9, "mobile"=>4578956325),
);

echo "<pre>";
// print_r($matrix);
print_r($students);
echo "</pre>";


// echo $students[14]["mobile"]."<br>";
// echo $students[13]["name"];

// foreach($students as $roll => $details){
//     echo "$roll:: ";
//     foreach($details as $k =>$v){
//         echo "$k: $v, ";
//     }
//     echo "<br>";
// }
// foreach($students as $roll => $details){
//     echo "$roll:: ";
//     echo "Name: ".$details["name"].", ";
//     echo "CGPA: ".$details['cgpa'].", ";
//     echo "Mobile: ".$details['mobile']." ";

//     echo "<br>";
// }
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>CGPA</th>
        <th>Mobile</th>
    </tr>
    <?php foreach($students as $roll => $details) { ?>
    <tr>
        <td><?php echo $roll ?></td>
        <td><?php echo $details['name'] ?></td>
        <td><?php echo $details['cgpa'] ?></td>
        <td><?php echo $details['mobile'] ?></td>
    </tr>
    <?php } ?>
</table>