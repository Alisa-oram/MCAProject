<?php
session_start(); // Start the session to access club name
require_once "../dbFunctions/dbconnection.php"; // Ensure database connection

if (isset($_GET['sic'])) {
    $conn = dbConnection();
    $sic = $_GET['sic'];

    $qry = "DELETE FROM registered_student WHERE sic = ?";
    $stmt = $conn->prepare($qry);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $sic); // Assuming SIC is a string

    if ($stmt->execute()) {
        // echo "<script>
        //         alert('Student Deleted!');
        //         window.location.href='manageStudent.php?club=" . $_SESSION['club_name'] . "';
        //       </script>";
        echo "<script>
                alert('Student Deleted!');
                window.location.href='manageStudent.php';
              </script>";
    } else {
        // echo "<script>
        //         alert('Error Deleting Student!');
        //         window.location.href='manageStudent.php?club=" . $_SESSION['club_name'] . "';
        //       </script>";
        echo "<script>
                alert('Error Deleting Student!');
                 window.location.href='manageStudent.php';
               </script>";
    }

}
?>
