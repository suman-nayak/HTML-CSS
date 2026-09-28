<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Code</title>
</head>
<body>

    <h1>Country Code Finder</h1>

    <?php

    $countryCodes = array(
        "India" => "+91",
        "United States" => "+1",
        "United Kingdom" => "+44",
        "Australia" => "+61",
        "Canada" => "+1",
        "Germany" => "+49",
        "France" => "+33",
        "Japan" => "+81"
    );

    ?>

    <form method="post" action="">

        <label>Select Country:</label>

        <select name="country">

            <option value="">Select Country</option>

            <?php

            foreach($countryCodes as $country => $code){

                echo "<option value='".$country."'>".$country."</option>";

            }

            ?>

        </select>

        <br><br>

        <input type="submit" name="submit" value="Show Code">

    </form>

    <?php

    if(isset($_POST["submit"])){

        $country = $_POST["country"];

        if($country == ""){

            echo "<h3>Please select a country.</h3>";

        } else {

            echo "<h3>Country: ".$country."</h3>";
            echo "<h3>Country Code: ".$countryCodes[$country]."</h3>";

        }

    }

    ?>

</body>
</html>