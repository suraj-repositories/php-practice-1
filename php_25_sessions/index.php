<?php
    // session : SUPER GLOBAL used to store information on a user 
    //           to be used across multiple pages.
    //           A user is assigned a session-id 
    //           ex . login credentials

    session_start();    // to start the session | whenever working with session we need to start the session
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
    <h1>Login to continue</h1>
    <form action="index.php" method="post">
            username : <input type="text" name="username"> <br>
            password : <input type="password" name="password"> <br>
            <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"]) ){
            $_SESSION["username"] = $_POST["username"];         // assigning variable to session
            $_SESSION["password"] = $_POST["password"];    

            header("Location: home.php");       // to jump to another page when session variables are set
        }
        else{
            echo "missing username/password";
        }
    }

?>
