<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // echo "<table border='1' cellpadding='10'>";
    // echo "<tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
    // for($i=1; $i<=10; $i++){
    //     echo "<tr>";
    //     echo "<td>$i</td>";
    //     echo "<td>".($i*$i)."</td>";
    //     echo "<td>".($i*$i*$i)."</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";
?>
<table border="1" cellpadding="10">
    <tr> <th>Number</th><th>Square</th><th>Cube</th></tr>
    <?php for($i=10; $i<=20; $i++){ ?>  
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $i*$i; ?></td>
                <td><?php echo $i*$i*$i; ?></td>
            </tr>
    <?php } ?>
</table>
</body>
</html>