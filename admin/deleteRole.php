<?php
session_start(); // Start the session to access club name
require_once "../dbFunctions/dbconnection.php"; // Ensure database connection

if (isset($_GET['id'])) {
    $conn = dbConnection();
    $id = $_GET['id'];

    $qry = "DELETE FROM coach WHERE id = ?";
    $stmt = $conn->prepare($qry);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $id); // Assuming id is a string

    if ($stmt->execute()) {
        echo "<script>
                alert('Role Deleted!');
                window.location.href='AllRole.php';
              </script>";
    } else {
        echo "<script>
                alert('Error Deleting Role!');
                 window.location.href='AllRole.php';
               </script>";
    }

}
?>
