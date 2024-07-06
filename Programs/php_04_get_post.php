<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>just reload it</title>
</head>

<body>

    <!-- get method example -->
    <form action="php_04_get_post.php" method="get">   <!-- you can either use get or post -->
        <label>username : </label> 
        <input type="text" name="user_name"><br>
        <label>password : </label> 
        <input type="password" name="_password"><br>
        <input type="submit" value="Login">
    </form>

</body>

</html>

<?php

    echo $_GET["user_name"];
    echo "<br>";
    echo $_GET["_password"];

    // echo "<br>";

    // echo "{$_POST["username"]}";


    // $_GET = Data is appended to the url
    //         NOT SECURE
    //         char limit
    //         Bookmark is possible w/ vlaues
    //         GET request can be catched
    //         Better for a search page

    // $_POST = Data is packaged inside the body url of http request
    //         MORE SECURE
    //         No data limit
    //         Can not Bookmark
    //         request are not cached
    //         Better for submitting credentials

?>