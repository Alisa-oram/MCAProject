<?php
session_start(); // Start the session to access club name
require_once "../dbFunctions/dbconnection.php"; // Ensure database connection

if (isset($_GET['id'])) {
    $conn = dbConnection();
    $id = $_GET['id']; // Get the event ID from the URL

    // Prepare the query to delete the event from the database
    $qry = "DELETE FROM event WHERE id = ?";
    $stmt = $conn->prepare($qry);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind the parameter (assuming id is a string, you may change the type if necessary)
    $stmt->bind_param("s", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
                alert('Event Deleted!');
                window.location.href='AllEvent.php'; // Redirect to events listing page
              </script>";
    } else {
        echo "<script>
                alert('Error Deleting Event!');
                window.location.href='AllEvent.php'; // Redirect back to events listing page
              </script>";
    }
}
?>
