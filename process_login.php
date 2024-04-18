<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from form
$name = $_POST['name'];
$pass = $_POST['pass'];

// Prepare SQL statement to select user from database
$sql = "SELECT * FROM user WHERE name='$name' AND password='$pass'";

// Execute SQL query
$result = $conn->query($sql);

// Check if user exists and password matches
if ($result->num_rows > 0) {
    // Redirect to project.php if login is successful
    header("Location: project.html");
    exit();
} else {
    // Display error message if login fails
    echo "<script>alert('Invalid username or password. Please try again.'); window.location.href = 'login.html';</script>";
}

$conn->close();
?>
