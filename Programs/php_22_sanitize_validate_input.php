<?php
// SANITIZE = it applies the specified filter to the input and retrun the filtered sring
// VALIDATE = it applies the specified validator to the input
//              if the input pass the test of validator it return the string back
//              otherwise it returns empty string

// TRY TO USE BOTH SANITIZE AND VALIDATE TO MAKE YOUR PROGRAM MORE EFFECTIVE 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize and validate</title>
</head>
<body>
    <form action="php_22_sanitize_validate_input.php" method="post">
        username : <input type="text" name="username"><br>
        age : <input type="text" name="age"><br>
        email : <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>


<?php
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        
        $username = filter_input(INPUT_POST, "username",
                                 FILTER_SANITIZE_SPECIAL_CHARS);

        // ----------------------  EXAMPLE FOR SANITIZE INPUT ---------------------------------------- 

        $age = filter_input(INPUT_POST,"age",
                            FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,"email"
                              FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}" . "<br>";
        // echo "Yur age is {$age}" . "<br>";

        // ----------------------  EXAMPLE FOR VALIDATE INPUT ----------------------------------------
        
        $age = filter_input(INPUT_POST, "age",              // it returns empty string if the input fail in validate test | and the string when it pass the validate test
                            FILTER_VALIDATE_INT);
        
        $email = filter_input(INPUT_POST, "email",
                              FILTER_VALIDATE_EMAIL);
        
        if(empty($email)){
            echo "That email is not valid <br>";
        }else{
            echo "Your emil is : {$email}<br>";
        }

        if(empty($age)){
            echo "This age is not valid<br>";
        }else{
            echo "your age is $age<br>";
        }

    }
?>
