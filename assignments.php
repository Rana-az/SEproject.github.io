<?php
// Assuming you have a database connection
// Replace placeholders with actual database details
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $assignmentTitle = $_POST["assignment_title"];
    $description = $_POST["description"];

    // Insert assignment into the database
    $sql = "INSERT INTO assignments (assignment_title, description) VALUES ('$assignmentTitle', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Assignment created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>