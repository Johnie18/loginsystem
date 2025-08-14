<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>alert("Welcome To Homepage!")</script>
</head>
<body>
    <h1>WELCOME TO homepage</h1>
    <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <input type="submit" name="notification" value="Notification">
    <input type="submit" name="messages" value="Messages" >
    <input type="submit" name="database" value="Database">
</body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Logout"])){
    header("Location: login.php");
    exit();
 }
 elseif(isset($_POST["messages"])){
   include("message.php");
 }
  elseif(isset($_POST["database"])){
   include("db.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><br>
     <input type="submit" name="Logout" value="Logout">
</body>
</html>