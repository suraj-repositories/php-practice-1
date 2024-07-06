<?php

    // array = 'variable' which can hold more than one value at a time

    $foods = array("apple", "orange","banana","coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // $food[0] = "pineapple";
    // array_push($foods, "pineapple");
    // array_push($foods, "pineapple","kiwi");
    // array_pop($foods);      // remove last element
    // array_shift($foods);       // remove element from begining
    // $foods = array_reverse($foods);     // it return a new array in reverse order
    echo count($foods);     // return number of elements in array

    // for each loop
    foreach($foods as $food){
        echo $food . "<br>";
    }

?>