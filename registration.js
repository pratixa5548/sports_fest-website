<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("registrationForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevents the default form submission behavior

                // Retrieve form data
                const name = document.getElementById("name").value;
                const pass = document.getElementById("pass").value;
                const phone = document.getElementById("phone").value;
                const email = document.getElementById("email").value;
                const branch = document.getElementById("branch").value;
                const course = document.getElementById("course").value;

                // Regular expressions for validation
                const nameRegex = /^[a-zA-Z]+$/;
                const passRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
                const phoneRegex = /^\d{10}$/;
                const emailRegex = /^\S+@\S+\.\S+$/;

                // Perform validation
                if (!nameRegex.test(name)) {
                    alert("Invalid name format.");
                    return;
                }
                if (!passRegex.test(pass)) {
                    alert("Password must be 6-20 characters long, contain at least one digit, one lowercase letter, and one uppercase letter.");
                    return;
                }
                if (!phoneRegex.test(phone)) {
                    alert("Invalid phone number format. Please enter a 10-digit number.");
                    return;
                }
                if (!emailRegex.test(email)) {
                    alert("Invalid email format.");
                    return;
                }

                // If all validations pass, redirect to project.html
                window.location.href = "project.html";
            });
        });
    </script>
</head>
<body>
    <form id="registrationForm" action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" required><br><br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
