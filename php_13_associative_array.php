<?php
    // associative array : An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA" => "Washington D.C.",
                      "Japan" => "Tokyo",
                      "South Korea" => "Seoul",
                      "India" => "New Delhi");

    // echo $capitals["USA"];
    // echo $capitals["Japan"];
    // echo $capitals["India"];

    // $capitals["USA"] = "Las Veges";        // change the value 
    // $capitals["China"] = "Beijing";        // add new key value pair
    // array_pop($capitals);                  // remove last key value pair
    // array_shift($capitals);                // remove first key value pair
    // $key = array_keys($capitals);          // get keys of associative array
    // $value= array_values($capitals);       // get all values
    // $capitals = array_flip($capitals);     // flip key to value and value to key
    // $capitals = array_reverse($capitals);  // to reverse the order of array
    // echo count($capitals);

    foreach($capitals as $key => $value){
        echo "{$key} : {$value}<br>";
    }



?>