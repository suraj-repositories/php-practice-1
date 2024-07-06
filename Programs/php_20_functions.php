<?php
    // function = write some code once, reuse when you need it 
    //             type () after function name to invoke
    //             ex. add() substract() multiply() divide()

    function happy_birthday($first_name,$age){
        echo "happy birthday dear {$first_name} <br>";
        echo "you are {$age} years old <br><br>";
    }

    happy_birthday("Shubham",21);
    happy_birthday("Neeraj",19);
    happy_birthday("Vaibhav",20);

    // --------------------------------- RETURN EXAMPLE -------------------------
    // function is_even($number){
    //     $result = $number % 2;

    //     if($result == 0){
    //         return "true";
    //     }
    //     return "false";
    // }
    
    // echo is_even(45) . "<br>";
    // echo is_even(44) . "<br>";

    // you can declare the data type in the parameter ---------------------------
   
    // function sum(int $a, int $b){
    //     return $a + $b;
    // }

    // echo sum(45,54) . "<br>";

?>