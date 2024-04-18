// Function to submit the form
function submitForm() {
    // Get username and password from the form
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();

    // Check if username and password are provided
    if (username === "" || password === "") {
        alert("Please enter username and password.");
        return false;
    }

    // Send a request to process_login.php to validate credentials
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                if (response === "success") {
                    // Login successful
                    alert("Login successful!");
                    // Redirect to project.html
                    window.location.href = "project.html";
                } else {
                    // Login failed
                    alert("Invalid username or password. Please try again.");
                }
            } else {
                // Error handling
                alert("An error occurred while processing your request. Please try again later.");
            }
        }
    };
    // Send the username and password to process_login.php
    var formData = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password);
    xhr.send(formData);

    // Prevent default form submission
    return false;
}

// Add event listener to the form submit button
document.getElementById("loginForm").addEventListener("submit", function(event) {
    // Prevent form submission
    event.preventDefault();
    // Call submitForm function to handle form submission
    submitForm();
});
