<?php
    include("php_28_connectToDATABASE.php");
    
    /* ----------------- FETCH SINGLE ROW ---------------- */
    
    $sql = "SELECT * FROM users WHERE user='Tushar'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["s_no"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["date_time"] . "<br>";
    }
    else{
        echo "No user found";
    }


    /* ----------------- FETCH ALL ROWS ---------------- */

    // $sql = "SELECT * FROM users";

    // $result = mysqli_query($conn,$sql);
 
    // if(mysqli_num_rows($result) > 0){
    //  while($row = mysqli_fetch_assoc($result)){
    //      echo $row["s_no"] . "<br>";
    //      echo $row["user"] . "<br>";
    //      echo $row["date_time"] . "<br>";
    //  }
    // }
    // else{
    //  echo "No user found !";
    // }


    mysqli_close($conn);
?>