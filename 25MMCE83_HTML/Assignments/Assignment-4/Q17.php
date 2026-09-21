<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>Number</th>
            <th>Result</th>
        </tr>

        <?php

        $n = 5;

        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td>".$n." X ".$i."</td>";
            echo "<td>".($n * $i)."</td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>