<?php
    /*hashing = transforming sensitive data via mathematical process.
    Similar to encryption that hides the original data from 3rd parties.
    */

    $password = "esdfj@#3";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("esdfj@#3", $hash)) {
        echo "verify";
    }
    else {
        echo "error";
    }
?>  