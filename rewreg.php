<?php
// Database configuration
$servername = "localhost"; // Assuming MySQL server is on localhost
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "project"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$studentName = $_POST['studentName'];
$studentSurname = $_POST['studentSurname'];
$parentName = $_POST['parentName'];
$parentSurname = $_POST['parentSurname'];
$studentPhone = $_POST['studentPhone'];
$studentEmail = $_POST['studentEmail'];
$parentEmail = $_POST['parentEmail'];
$parentPhone = $_POST['parentPhone'];
$course = $_POST['course'];
$branch = $_POST['branch'];

// Prepare SQL statement
$sql = "INSERT INTO registration (Username, StudentName, StudentSurname, ParentName, ParentSurname, StudentPhone, StudentEmail, ParentEmail, ParentPhone, Course, Branch) 
        VALUES ('$username', '$studentName', '$studentSurname', '$parentName', '$parentSurname', '$studentPhone', '$studentEmail', '$parentEmail', '$parentPhone', '$course', '$branch')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
