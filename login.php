<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <?php
        $msg="";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == 'admin' && $password == '12345'){
                // $msg = "Login Successful";
                header('location:dashboard.php');
            } else {
                $msg = "Invalid Credentails";
            }
        }
    ?>
    <h1>Login Here</h1>
    <p style="color: red;"><?php echo $msg ?></p>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username"> <br><br>
        <input type="password" name="password" placeholder="Password"> <br><br>
        <input type="submit" value="Log In"> <br><br>
    </form>
</body>
</html>