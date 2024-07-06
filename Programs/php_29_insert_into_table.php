
<?php
    include("php_28_connectToDATABASE.php");
    
    $username = "Saurabh";
    $password = "Saurabh@123";
    $hash = password_hash($password,PASSWORD_DEFAULT);


    $sql = "INSERT INTO users(user,password)
            VALUES ('$username','$hash')";


    try{
        mysqli_query($conn, $sql);
        echo "<br>registration complete ! <br>you are registered now!";
    }
    catch(mysqli_sql_exception){
        echo "<br>Could not register the user";
    }


    mysqli_close($conn);
?>