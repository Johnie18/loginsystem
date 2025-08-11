<?php
include("database.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO SIGNUP PAGE!</h1>
    <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        Email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="signup" value="Signup"><br>
        <a href="login.php">Go to Login</a>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['signup'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($username && $password && $email)){
echo "Fill in Username, Password and Email!";
    }
    else{
        try{
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
        echo "SUCCESSFULLY SIGN IN!";
        
        header("location: login.php");
       exit();

        }
        catch(mysqli_sql_exception){
            echo "Username exist!";
        }
    }
    
}
}

 mysqli_close($conn);
?>