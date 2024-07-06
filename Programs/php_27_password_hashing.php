<?php

    // hashing = transforming sensitive data(password)
    //           into letters, numbers, and/or symbols 
    //           via a mathematical process. (similar to encryption)
    //           Hides the original data form 3rd parties.

    $password = "password@123";

    //                    (password, hashing algorithm)                           
    $hash = password_hash($password, PASSWORD_DEFAULT);     // creating hash of password use this function it take's two parameters 

    echo "Hash of the password : ";
    echo $hash . "<br>";

    // ------------------------------------------------------------------------------------------------

    $userinput_password = "123465798"; // user entered a password 

    //                (password to varify, hash of correct password)
    if(password_verify($userinput_password,$hash)){ //lets check he entered write password or not
        echo "password is correct !";
    }
    else{
        echo "<h2>incorrect password</h2>";
    }

?>