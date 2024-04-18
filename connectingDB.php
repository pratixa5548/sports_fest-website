<?php
function connectDB() {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    $tableName = "user_details"; // Declare the table name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to insert data into database
function insertData($conn, $username, $studentName, $studentSurname, $parentName, $parentSurname, $studentPhone, $studentEmail, $parentEmail, $parentPhone, $course, $branch, $password) {
    $tableName = "user_details"; // Declare the table name

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO $tableName (Username, StudentName, StudentSurname, ParentName, ParentSurname, StudentPhone, StudentEmail, ParentEmail, ParentPhone, Course, Branch, Password)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssssssssss", $username, $studentName, $studentSurname, $parentName, $parentSurname, $studentPhone, $studentEmail, $parentEmail, $parentPhone, $course, $branch, $password);

    // Execute statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    // Close statement (optional as it's automatically closed when the function ends)
    $stmt->close();
}
?>
