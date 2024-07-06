<?php

    $age = 1205;

    if($age > 100){
        echo "you are too old to vote sorry!";
    }
    elseif($age >= 18){
        echo "You are eligible for vote";
    }
    elseif($age == 0){
        echo "You were just born";
    }
   
    elseif($age <= 0){
        echo "enter valid age";
    }
    else{
        echo "You are not eligible for vote";
    }

// it also work with booleans
    // $adult = true;

    // if($adult){
    //     echo "you may enter this site";
    // }
    // else{
    //     echo "you must be an adult to enter";
    // }

?>