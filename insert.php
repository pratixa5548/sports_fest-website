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

// Retrieve data from form
$name = $_POST['name'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$course = $_POST['course'];

// Insert data into database
$sql = "INSERT INTO user (name, password, phone_number, email_id, branch, course) VALUES ('$name', '$pass', '$phone', '$email', '$branch', '$course')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();

    // Redirect to project.html
    echo '<script>window.location.href = "project.html";</script>';
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
