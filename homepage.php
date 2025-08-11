<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO FACEBOOK</h1>
    <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <input type="submit" name="Logout" value="Logout">
</body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Logout"])){
    header("Location: login.php");
    exit();
 }
?>