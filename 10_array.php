<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        .text-success {
            color: green;
        }
        .text-danger {
            color: red;
        }
    </style>
</head>
<body>
<?php
$stds = array (
    "amit" => 89,
    "bijay" => 70,
    "arjun" => 40,
    "amrita" => 82,
    "riya" => 30
);

function getStatus($num){
    return $num >= 50 ? "Pass" : "Fail";
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Score</th>
        <th>Status</th>
    </tr>
    <?php 
        foreach($stds as $n => $s){ 
        $status = getStatus($s);        
    ?>
    <tr>
        <td><?php echo $n ?></td>
        <td><?php echo $s ?></td>
        <td>
            <span class="<?php getStatus($s) == "Pass" ? print 'text-success' : print 'text-danger' ?>">
                <?php echo getStatus($s) ?>
            </span>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>