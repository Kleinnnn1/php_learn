<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
        <input type="submit" name="signup" value="signup">

    </form>
</body>
</html>

<?php
    session_start();

    if(isset($_POST["login"])) {

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
    
            header("Location: home.php");
        }

        else {
            echo "username or password required.";
        }
    }

    if(isset($_POST["signup"])) {
        header("Location: register.php");
    }

?>
