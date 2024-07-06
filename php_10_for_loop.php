
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loop</title>
</head>
<body>
    <form action="php_10_for_loop.php" method="post">
        <label>Enter a number to count to : </label>
        <input type="text" name="counter">
        <input type="submit" name="start">
    </form>
</body>
</html>

<?php

    // for loop = repeat some code a certain number of time

    $counter = $_POST["counter"];

    for($i = 1 ; $i <= $counter ; $i++){
        echo $i . "<br>";
    }

?>
