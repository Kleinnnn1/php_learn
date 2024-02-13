<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <label>username:</label>
        <input type="text" name="username"> <br>
        <label>password:</label>
        <input type="text" name="password"> <br>
        <label>email:</label>
        <input type="text" name="email"> <br>
        <input type="submit" name="register" value="register">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

    if(isset($_POST["register"])) {
        
        if(!empty($_POST["username"]) && !empty($_POST["passwword"]) && !empty($_POST["email"])) {
            header("Location: index.php");
        }

        else {
            echo "username/password/email required.";
        }
    }

    if(isset($_POST["login"])) {
        header("Location: index.php");
    }


?>