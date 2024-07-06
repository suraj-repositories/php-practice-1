<?php

    // Logical operator : combine conditional statements       
    // if(!conditional)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // !  = True if false , False if true;

    $temp = 25;
    $cloudy = true;

    // &&
    if($temp >= 0 && $temp <= 30){
        echo "The weather is good";
    }
    else{
        echo "the weather is bad";
    }

    echo "<br>";
    
    // ||
    if($temp < 0 || $temp > 30){
        echo "The weather is bad";
    }
    else{
        echo "The weather is good";
    }
    
    echo "<br>";
    
    // !
    if(!$cloudy){
        echo "It is sunny";
    }
    else{
        echo "it is cloudy";
    }
    

    echo "<br>";
    // ---------------- EXAMPLE ------------------
    $age = 18;
    $citizen = true;

    if(!$age >= 18 || !$citizen){
        echo "You can't vote";
    }
    else{
        echo "You can vote";
    }
?>