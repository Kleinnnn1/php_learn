<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>age: </label>
        <input type="text" name="age"><br>
        <label>email: </label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    //sanitize and validate
    if(isset($_POST["login"])) {
        
      
       $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        
       if(empty($age)) {
        echo "enter your age.<br>";
       }
       else {
        echo "You are {$age} yrs. old.<br>";
       }
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

       if(empty($email)) {
        echo "enter a valid email.";
       }
       else {
        echo "your email is valid.";
       }
    }

?>