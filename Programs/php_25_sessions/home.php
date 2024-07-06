<?php
    session_start();        // when working with session must to start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the home page</h2>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>


<?php
    echo "Hello " . $_SESSION["username"] . "<br>";        // accepting session variables
    echo "password : " . $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();                  //  destroy the session 
        header("Location: index.php");      // again back to the index page
    }
?>