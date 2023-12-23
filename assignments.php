<?php
// Assuming you have a database connection established

// Fetching assignment details from the database
$assignmentTitle = "Sample Assignment";
$assignmentDescription = "This is a sample assignment description.";

// You can fetch more details as needed

// Sending data as JSON
header('Content-Type: application/json');

echo json_encode([
    'title' => $assignmentTitle,
    'description' => $assignmentDescription,
    // Add more data as needed
]);
?>