<!-- register.php -->
<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    // Retrieve other form fields
    
    // Insert user data into the database
    $sql = "INSERT INTO users (username, ...) VALUES ('$username', ...)";
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
}

mysqli_close($conn);
?>
