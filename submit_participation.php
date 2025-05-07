<?php
require_once "./dbFunctions/dbconnection.php"; // Include database connection

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
$event_id = (int)$_POST['event_id']; // Event ID passed as hidden input

// Validate form data
if (empty($name) || empty($email) || empty($role) || empty($department) || empty($event_name)) {
    die("All fields are required.");
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO participants (name, email, role, department, event_name, event_id) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $name, $email, $role, $department, $event_name, $event_id);

// Execute and check the result
if ($stmt->execute()) {
    // Redirect to a confirmation page or show success message
    echo "Participation submitted successfully! <a href='event_list.php'>Go back to events</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
