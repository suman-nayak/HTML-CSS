<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Group</title>
</head>
<body>

    <h1>Select Your Age Group</h1>

    <form method="post" action="">

        <label>Select Age:</label>

        <select name="age">
            <option value="">Select Age Group</option>
            <option value="under18">Under 18</option>
            <option value="adult">18-35</option>
            <option value="middle-aged">36-50</option>
            <option value="senior">Above 50</option>
        </select>

        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

    if(isset($_POST["submit"])){

        $age = $_POST["age"];

        if($age == "under18"){

            header("Location: teen.php");
            exit;

        } elseif($age == "adult"){

            header("Location: adult.php");
            exit;

        } elseif($age == "middle-aged"){

            header("Location: middle-aged.php");
            exit;

        } elseif($age == "senior"){

            header("Location: senior.php");
            exit;

        } else {

            echo "<h3>Please select an age group.</h3>";

        }

    }

    ?>

</body>
</html>