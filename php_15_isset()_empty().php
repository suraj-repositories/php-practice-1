<?php
    // isset() = Retruns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    // ---------- ISSET() -------------
    $username = "Shubham kumar";
    // $username = null;
    // $username = false;
    // $username = true;
    // $username = "";

    echo isset($username);

    if(isset($username)){
        echo"This variable is set";
    }
    else{
        echo"This variable is NOT set";
    }

    echo "<br>";
    // ---------- EMPTY() -------------

    // $username1 = "Shubham kumar";
    // $username1 = "";
    // $username1 = null;
    // $username1 = true;
    // $username1 = false;

    if(empty($username1)){
        echo"This variable is empty";
    }
    else{
        echo "This variable is not empty";
    }
?>