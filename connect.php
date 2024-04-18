<?php
include('database.php');

$username = $_POST["name"];
$password = $_POST["password"];

// $hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO subscribe (Name, Password)
        VALUES('$username', '$password')";
mysqli_query($conn, $sql);
echo "yay";



mysqli_close($conn);