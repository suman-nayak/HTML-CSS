<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>

    <?php

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $branch = $_POST["branch"];

        echo "<p><b>Name:</b> ".$name."</p>";
        echo "<p><b>Gender:</b> ".$gender."</p>";
        echo "<p><b>Date of Birth:</b> ".$dob."</p>";
        echo "<p><b>Address:</b> ".$address."</p>";
        echo "<p><b>Mobile:</b> ".$mobile."</p>";
        echo "<p><b>Email:</b> ".$email."</p>";
        echo "<p><b>Branch:</b> ".$branch."</p>";

        echo "<p><b>Language Known:</b> ";

        if(isset($_POST["language"])){

            foreach($_POST["language"] as $language){

                echo $language." ";

            }

        } else {

            echo "No language selected";

        }

        echo "</p>";

    }

    ?>

</body>
</html>