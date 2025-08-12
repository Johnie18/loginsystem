<?php
include("database.php"); // Connects to your database

$sql = "SELECT * FROM users"; // SQL query to get all rows from 'users' table
$result = mysqli_query($conn, $sql); // Run the query

if (mysqli_num_rows($result) > 0) { // Check if there is at least 1 row
    echo "<br><br>HERE IS THE DATABASE<br>";

    // Loop through all rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "USERNAME: " . $row["username"] . "<br>";
        echo "PASSWORD: " . $row["password"] . "<br>";
        echo "DATE & TIME CREATED: " . $row["datetime"] . "<br><br>";
    }
} else {
    echo "<h1>No records found in the database!</h1>";
}

mysqli_close($conn); // Close the database connection
?>
