<?php
    // cookie = store information about user stored in a user's web-browser
    //          targeted adverstisement, browsing preferences, and
    //          other non-sensitive data.

    setcookie("location", "ketkai", time() + 86400, "/");
    setcookie("location", "wao", time() + 86400, "/");
    setcookie("date", "10-11-12", time() + 86400, "/");


    if(isset($_COOKIE["date"])) {
        echo "The date {$_COOKIE["date"]} is available";
    }
    else {
        echo"not found.";
    }



?>