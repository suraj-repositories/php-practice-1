<?php

// Arithmetic operators = + - * / ** %

    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y;
    $z = $x % $y;

    echo $z;
    echo "<br>";
    // Increment/Decrement Operator
    
    $counter = 0;
    
    // $counter++;      // firstly it uses then increses;
    // $counter--;      // firstly it uses then decreses;
    
    // $counter += 3;
    // $counter -= 3;
    $counter **= 3;

    echo $counter;
    echo "<br>";
    
    // Operator precedence
    // ()
    // **
// * / %
// + -

$total = 1 + 2 - 3 * 4 / 15;  // solve the equation in precidense order
echo $total;
echo "<br>";

?>