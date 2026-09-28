<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check</title>
</head>
<body>

    <h1>Prime Number Checker</h1>

    <form method="post" action="">
        <label>Enter a Number:</label>
        <input type="number" name="number" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php

    if(isset($_POST["submit"])){

        $number = $_POST["number"];
        $isPrime = true;

        if($number < 2){
            $isPrime = false;

        } else {

            for($i = 2; $i < $number; $i++){

                if($number % $i == 0){

                    $isPrime = false;
                    break;

                }
            }
        }

        if($isPrime){

            echo "<h3>".$number." is a Prime Number.</h3>";

        } else {

            echo "<h3>".$number." is not a Prime Number.</h3>";

        }

    }

    ?>

</body>
</html>