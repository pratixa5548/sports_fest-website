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
$bloodgroup = $_POST['bloodgroup'];
$parent_name = $_POST['parent_name'];
$parent_phone = $_POST['parent_phone'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$sport = $_POST['sport'];

// Insert data into database
$sql = "INSERT INTO participants (name, bloodgroup, parent_name, parent_phone, age, sex, sport) VALUES ('$name', '$bloodgroup', '$parent_name', '$parent_phone', '$age', '$sex', '$sport')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();
    
    // JavaScript alert to display a congratulatory message with the entered name
    echo '<script>
            var enteredName = "' . $name . '";
            alert("Congratulations on signing up, " + enteredName + "!");
            window.location.href = "project.html";
          </script>';
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
