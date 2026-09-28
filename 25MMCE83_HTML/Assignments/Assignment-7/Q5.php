<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login Form</h1>

    <form method="post" action="">

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

    <?php

    if(isset($_POST["login"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == "jhon@gmail.com" && $password == "12345"){

            header("Location: welcome.php");
            exit;

        } else {

            echo "<h3>Invalid Username or Password.</h3>";

        }

    }

    ?>

</body>
</html>