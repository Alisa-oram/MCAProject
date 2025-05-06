<?php
require_once "./dbFunctions/dbconnection.php";
// Database connection
$conn = dbConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];
$department = $_POST['department'];
$event_name = $_POST['event_name'];

// Insert into database
$sql = "INSERT INTO participants (name, email, role, department, event_name)
        VALUES ('$name', '$email', '$role', '$department', '$event_name')";

if ($conn->query($sql) === TRUE) {
    echo "Participation submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
