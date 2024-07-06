<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php_18_checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){

        if(isset($_POST["pizza"])){
            echo "You like pizza!";
            echo "<br>";
        }
        if(isset($_POST["hamburger"])){
            echo "You like hamburger!";
            echo "<br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog!";
            echo "<br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco!";
            echo "<br>";
        }



        if(empty($_POST["pizza"])){
            echo "You DON'T like pizza!";
            echo "<br>";
        }
        if(empty($_POST["hamburger"])){
            echo "You DON'T like hamburger!";
            echo "<br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You DON'T like hotdog!";
            echo "<br>";
        }
        if(empty($_POST["taco"])){
            echo "You DON'T like taco!";
            echo "<br>";
        }
    }

?>