<?php

    $username = "Shubham kumar";
    $name = "        suraj     ";
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($name);
    // $username = str_pad($username,20,"$");
    // $phone = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
 
    echo $username . "<br>";
    echo $phone . "<br>";



    // echo strcmp($username,"Shubham kumar") . "<br>";   // comparing two strings | if they are equal it return 0 otherwise -1
    // echo strlen($username) . "<br>";
    // echo strpos($phone, "-") . "<br>";
    // echo substr($username, 0, 7) . "<br>";
    // echo substr($username,8) . "<br>";


    // ---------------------- explode and implode funtions ----------------------------------------
    $name1 = "Mr. Ajay kumar yadav";
    $name2 = array("Mr.","P","S","Arya");

    $words = explode(" " , $name1);

    foreach($words as $word){
        echo $word . "<br>";
    }

    echo "<br>";
    $fullname = implode(" " , $name2);

    echo $fullname;


?>