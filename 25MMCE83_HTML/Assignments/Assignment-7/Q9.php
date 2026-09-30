<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Registration</title>
</head>
<body>

    <h1>Username Registration</h1>

    <form method="post" action="">

        <label>Enter Username:</label>
        <input type="text" name="username" required>

        <br><br>

        <input type="submit" name="register" value="Register">

    </form>

    <?php

    $registeredUsers = array(
        "suman",
        "rahul",
        "john",
        "amit",
        "priya"
    );

    if(isset($_POST["register"])){

        $username = $_POST["username"];

        if(in_array($username, $registeredUsers)){

            echo "<h3>Username already exists. Please choose another username.</h3>";

        } else {

            echo "<h3>Username is available. Registration successful.</h3>";

        }

    }

    ?>

</body>
</html>