<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <h2>Display Data</h2>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Student Name</th>
            <th>Student Surname</th>
            <th>Parent Name</th>
            <th>Parent Surname</th>
            <th>Student Phone</th>
            <th>Student Email</th>
            <th>Parent Email</th>
            <th>Parent Phone</th>
            <th>Course</th>
            <th>Branch</th>
        </tr>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from database
        $sql = "SELECT Username, StudentName, StudentSurname, ParentName, ParentSurname, StudentPhone, StudentEmail, ParentEmail, ParentPhone, Course, Branch FROM user_details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["Username"]). "</td>";
                echo "<td>" . htmlspecialchars($row["StudentName"]). "</td>";
                echo "<td>" . htmlspecialchars($row["StudentSurname"]). "</td>";
                echo "<td>" . htmlspecialchars($row["ParentName"]). "</td>";
                echo "<td>" . htmlspecialchars($row["ParentSurname"]). "</td>";
                echo "<td>" . htmlspecialchars($row["StudentPhone"]). "</td>";
                echo "<td>" . htmlspecialchars($row["StudentEmail"]). "</td>";
                echo "<td>" . htmlspecialchars($row["ParentEmail"]). "</td>";
                echo "<td>" . htmlspecialchars($row["ParentPhone"]). "</td>";
                echo "<td>" . htmlspecialchars($row["Course"]). "</td>";
                echo "<td>" . htmlspecialchars($row["Branch"]). "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
