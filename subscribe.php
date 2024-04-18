<?php
include ('database.php');
?>

<!DOCTYPE html>
<head>
    <title>User Sign-up</title>
    <link rel="stylesheet" href="subscribe.css">
    <script src="subscribe.js"></script>
</head>
<body>
    <a href="athleticon.html"><img id="logo" src="logo.png" alt="logo"><br><br><br><br><br><br></a>
<form id="registrationForm" action="subscribe.php" method="post">
    <label>Username:</label>
    <input type="text" name="name" id="name" placeholder="Username" required><br>
    <label>E-mail:</label>
    <input type="text" id="email" placeholder="E-mail" required><br>
    <label>Phone Number:</label>
    <input type="text" id="phone" placeholder="Phone Number" required><br>
    <label>Sex:</label>
    <input type="radio" id="male">
    <label for="male">Male</label>
    <input type="radio" id="female">
    <label>Female</label><br><br>
    <label>Date of Birth:</label>
    <input type="date"><br><br>
    <label>Languages Known:</label>
    <input type="checkbox" id="hindi">
    <label>English</label>
    <input type="checkbox" id="english">
    <label>Hindi</label>
    <input type="checkbox" id="sanskrit">
    <label>Sanskrit</label><br><br>
    <label>Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required><br>
    <label>Address:</label>
    <textarea id="address" rows="4" cols="50" placeholder="Address"></textarea><br>
    <input type="submit">
    <input type="reset">
    <p>Already Signed up? <a href="login.php">Login</a></p>

</form>
<footer class="footer">
        <div class="contact-us">
            <h2>Contact Us</h2>
            <p>Name: Sidhali Singh</p>
            <p>Phone: +1234567896</p>
            <p>Email: sidhali@gmail.com</p>
            <p>Instagram: athleticon_muj</p>
        </div>
        <div class="copyright">
            <p>&copy; Manipal University Jaipur 2024</p>
        </div>
    </footer></body>
</html>

<?php

$username = $_POST["name"];
$password = $_POST["password"];

// $hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO subscribe (Name, Password)
        VALUES('$username', '$password')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>
