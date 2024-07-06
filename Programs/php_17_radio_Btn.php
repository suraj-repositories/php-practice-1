<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php_17_radio_Btn.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Master card">
        Master card<br>
        <input type="radio" name="credit_card" value="Rupay">
        Rupay<br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }
        
        if($credit_card == "Visa"){
            echo "You selected Visa";
        }
        elseif($credit_card == "Master card"){
            echo "You selected Mastercard";
        }
        elseif($credit_card == "Rupay"){
            echo "You selected Rupay";
        }
        else{
            echo "Please make a selection";
        }

    }


?>