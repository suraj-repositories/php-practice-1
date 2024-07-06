<?php
    $name = "Shubham kumar";
    $email = "email@gmail.com";

    $age = 21;

    $gpa = 2.5;
    $price = 4.99;

    $online = false;    // if it is false we can't display it 
    $for_sale = true;

    echo $name;
    echo "<br>";
    echo "Hello {$name} <br>";
    echo "Your email is {$email} <br>";

    echo "You are {$age} years old<br>";

    echo "Your GPA is : {$gpa} <br>";
    echo "Your pizza is \${$price}<br>";    // IMPORTANT

    echo "Online status : {$online}<br>";
    echo "For sale : {$for_sale}"




?>