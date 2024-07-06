<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php_06_mathFunctions.php" method="post">
        <label>x : </label>
        <input type="text" name="x">
        <input type="submit" value="result">
    </form>    
</body>
</html>


<?php
    $x = $_POST["x"];
    $y = 5;
    $y = 3;
    $result = null;

    // $result = abs($x);
    // $result = round($x);
    // $result = floor($x);
    // $result = ceil($x);
    // $result = pow($x,$y);
    // $result = max($x,$y,$z);
    // $result = min($x,$y,$z);
    // $result = pi();

    $result = rand();
    // $result  = rand(1,100);


    echo $result;

?>
