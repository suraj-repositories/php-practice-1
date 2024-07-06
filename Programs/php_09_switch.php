<?php

    // switch = replacement to useing many elseif statement
    //         more efficient, less code to write

    $grade = "A";

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okey";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo"Invalid grade";
    }
?>