<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
        const password = document.getElementById('password');
        const btn = document.getElementById('btn');
        btn.addEventListener("click", function(event){
            event.preventDefault();
             if (password.getAttribute("type") === "password") {
        password.setAttribute("type", "text");
        btn.textContent = "Hide";
      } else {
        password.setAttribute("type", "password");
        btn.textContent = "Show";
      }
        });
            });
    </script>
</head>
<body>
    <h1>WELCOME TO LOGIN PAGE</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Enter Your Username: <br>
        <input type="text" name="username"><br>
        Enter Your Password: <br>
        <input type="password" id="password" name="password">
        <button id="btn">show</button><br>
        <input type="submit" name="login" value="Login"><br>
        <a href="signin.php">Haven't account yet?</a><br>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $checkUser = "SELECT * FROM users WHERE username = '$username'";
    $userResult = mysqli_query($conn, $checkUser);

    if (mysqli_num_rows($userResult) > 0) {
        // Username exists, now check password
        $checkPass = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $passResult = mysqli_query($conn, $checkPass);

        if (mysqli_num_rows($passResult) > 0) {
            // Correct login
            session_start();
            $_SESSION['username'] = $username;
            echo "<script> alert('Welcome to homepage!');
            window.location.href = 'homepage.php';
            </script>";
            exit();
        } else {
            echo "<script> alert('Incorrect password!')</script>";
        }
    } else {
        echo "<script> alert('Username does not exist!') </script>" ;
    }
}

mysqli_close($conn);
?>
