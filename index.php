<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <label>email:</label>
        <input type="text" name="email"><br>
        <input type="submit" value="start">

    </form>
</body>
</html>
   

<?php
    echo $_POST["username"] . "<br>";
    echo $_POST["password"]. "<br>";
    echo $_POST["email"]. "<br>";

//GET METHOD DATA IS APPENDED TO URL NOT SECURE
// CHAR LIMT
// BOOK MARK IS POSSIBLE WITH VALUES
// GET REQUESED CAN BE CACHED
// BETTER FOR SEARCH PAGE
// USE GET IF THE DATA IS NOT IMPORTANT


//GET POST DATA IS PACKAGE INSIDE THE BODY OF THE HTTP REQUEST
// MORE SECURE
// NO DATA LIMIT
// CANNOT BOOKMARK
// GET REQUESED ARE NOT CACHED
// BETTER FOR SUBMITTING CREDENTIALS
// USE IF THE DATA IS IMPORTANT

?>

