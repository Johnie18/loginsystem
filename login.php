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
    <h1>WELCOME TO LOGIN PAGE</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Enter Your Username: <br>
    <input type="text" name="username" ><br>
    Enter Your Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login"><br>
    <a href="signin.php">Haven't account yet?</a><br>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
        // Optional: Start session and store user data
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to homepage
        header("Location: homepage.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
mysqli_close($conn);
?>