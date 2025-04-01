<?php
session_start();
require_once "../databaseconn/dbconnection.php";

function approveStudent($sic) {
    $conn = dbConnection();
    if (!isset($_SESSION['club_name'])) {
        die("Club name not set in session.");
    }

    $club_name = $_SESSION['club_name'];

    // Fetch student data from registered_student
    $qry = "SELECT * FROM registered_student WHERE sic = ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("s", $sic);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();

        // Convert DOB to password and hash it
        $dob_password = $student['dob'];

        // Insert data into club_member table
        $insertQry = "INSERT INTO club_member (club_name, name, email, password, sic, dept, year) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)";

        $insertStmt = $conn->prepare($insertQry);
        if (!$insertStmt) {
            die("Prepare failed (INSERT): " . $conn->error);
        }

        $insertStmt->bind_param(
            "sssssss",
            $student['club'],   // Club Name
            $student['name'],   // Student Name
            $student['email'],  // Email
            $dob_password,      // Hashed DOB as Password
            $student['sic'],    // SIC
            $student['dept'],   // Department
            $student['year']    // Year
        );

        if ($insertStmt->execute()) {
            // Delete from registered_student after successful transfer
            $deleteQry = "DELETE FROM registered_student WHERE sic = ?";
            $deleteStmt = $conn->prepare($deleteQry);
            $deleteStmt->bind_param("s", $sic);
            $deleteStmt->execute();

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>
