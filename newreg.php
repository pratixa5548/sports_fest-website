<?php
include 'connectingDB.php';

// Create connection
$conn = connectDB();

// Check if the form is submitted
if (isset($_POST['create'])) {
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
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Insert data into database
    if (insertData($conn, $username, $studentName, $studentSurname, $parentName, $parentSurname, $studentPhone, $studentEmail, $parentEmail, $parentPhone, $course, $branch, $password)) {
        echo "New record created successfully";
    } else {
        echo "Error: Unable to create record";
    }
}

// Close connection
$conn->close();
?>
