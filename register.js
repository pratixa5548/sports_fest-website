function validateForm() {
    var username = document.getElementById("username").value;
    var bloodgroup = document.getElementById("bloodgroup").value;
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var sport = document.getElementById("Sport").value;

    // Regular expressions for email and phone number validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\d{10}$/;

    if (username === "" || bloodgroup === "" || name === "" || surname === "" || email === "" || phone === "" || sport === "") {
        alert("Please fill in all fields.");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (!phoneRegex.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    return true;
}
