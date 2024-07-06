<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php_14_practice_associative_array.php" method="post">
        <label>Enter country :</label>
        <input type="text" name="country">
        <input type="submit" value="Capital">
    </form>
</body>
</html>

<?php

$capitals = array("USA" => "Washington D.C.",
                  "Japan" => "Tokyo",
                  "South Korea" => "Seoul",
                  "India" => "New Delhi");

$country = $_POST["country"];
echo $capitals[$country];

?>