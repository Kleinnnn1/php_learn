<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>enter username:</label>
        <input type="text" name="username">
        <input type="submit" value="search">
    </form>
</body>
</html>

<?php  //associative array = key pair values
    $users = array("Kenn"=> "Male",
                    "Kc"=> "Female",
                    "Niel" => "Male"
);
    $username = $_POST["username"];
    $user = $users[$_POST["username"]];
    echo "User data: <br>";
    echo "name: {$username} gender: {$user}"
    //$users["Kc"] = "Male";
    //$users["Kath"] = "Female";
    //$user_keys_array = array_keys($users);

    /*foreach($users as $key => $value) {
        echo "{$key} {$value} <br>";
    }*/

?>
