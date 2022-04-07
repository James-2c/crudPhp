<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = "user";
    
    $sql = "INSERT INTO user (USERNAME, PASSWORD, ROLE) VALUES('$username', '$password', '$role')";
    $con->query($sql) or die ($con->error);
    
    echo header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="login-form">
        <form action="" method="post">
            <h2>Register</h2>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Username" name="username" id="username" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="password" id="password" autocomplete="new-password">
                </div>
            </div>                       
           
                <input type="submit" class="btn2" name="register" value="Register">
              
            
        </form>
</body>
</html>