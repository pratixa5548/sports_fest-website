<?php
include 'connectingDB.php';

// Check if the username is provided in the POST request
if(isset($_POST['username'])) {
    $username = $_POST['username'];

    // Connect to the database
    $conn = connectDB();

    // Prepare and execute SQL statement to check username uniqueness
    $stmt = $conn->prepare("SELECT Username FROM user_details WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // If username exists, return 'not_unique', otherwise return 'unique'
    if ($stmt->num_rows > 0) {
        echo "not_unique";
    } else {
        echo "unique";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

