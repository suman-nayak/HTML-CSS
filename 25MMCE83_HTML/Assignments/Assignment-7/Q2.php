<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

    <h1>Simple Calculator</h1>

    <form method="post" action="">

        <label>Enter First Number:</label>
        <input type="number" name="num1" required>

        <br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2" required>

        <br><br>

        <label>Select Operator:</label>

        <select name="operator" required>
            <option value="">Select</option>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>

        <br><br>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <?php

    if(isset($_POST["calculate"])){

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        if($operator == "+"){

            $result = $num1 + $num2;

        } elseif($operator == "-"){

            $result = $num1 - $num2;

        } elseif($operator == "*"){

            $result = $num1 * $num2;

        } elseif($operator == "/"){

            if($num2 != 0){

                $result = $num1 / $num2;

            } else {

                echo "<h3>Cannot divide by zero.</h3>";
                exit;

            }

        }

        echo "<h3>Result: ".$result."</h3>";

    }

    ?>

</body>
</html>