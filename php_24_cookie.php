<?php
    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and 
    //          other non-sensitive data
    //          F12 -> applications to view cookies


    /*TO SET THE COOKIE YOU CAN USE THE SET COOKIE METHOD WHICH TAKES (key, value, time of exipry in seconds, path for save)*/
    setcookie("fav_food","pizza",time() + 86400, "/");  // valid for a day  ["/" is used for default directory path]
    setcookie("fav_drink","coffee",time() + (86400 * 2), "/");  // valid for two days
    setcookie("fav_desert","ice cream",time() + (86400 * 3), "/");  // valid for three days
    
    /* TO DELETE THE COOKIE SET THE TIME TO => time() - 0 */
    // setcookie("fav_food","pizza",time() - 0, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} : {$value}" . "<br>";
    }

    echo "<br>";

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}";
    }
    else{
        echo "I don't know your favourite food.";
    }

?>