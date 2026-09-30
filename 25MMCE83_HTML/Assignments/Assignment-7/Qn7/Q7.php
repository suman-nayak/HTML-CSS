<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utility Functions</title>
</head>
<body>

    <h1>PHP Utility Functions</h1>

    <?php

    include "utility_functions.php";

    echo "<p><b>Current Time:</b> ".\Utility\getTime()."</p>";

    echo "<p><b>Today's Date:</b> ".\Utility\getDate()."</p>";

    echo "<p><b>OTP:</b> ".\Utility\getOtp()."</p>";

    echo "<p><b>Captcha:</b> ".\Utility\getCaptcha()."</p>";

    ?>

</body>
</html>