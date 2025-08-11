<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="card" value="VISA">
        VISA<br>
         <input type="radio" name="card" value="PASSPORT">
        PASSPORT<br>
        <input type="submit" name="Confirm" value="CONFIRM">

    </form>
</body>
</html>
<?php

    $card = null;

    if(isset($_POST["card"])){
    $card = $_POST["card"];
    }
    
    switch($card){
        case "VISA":
            echo "YOU'VE SELECTED VISA";
            break;
        case "PASSPORT":
            echo "YOU'VE SELECTED PASSPORT";
            break;
        default:
        echo "CHOOSE A CARD!";
    }

?>