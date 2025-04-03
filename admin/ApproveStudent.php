<?php
session_start();
require_once "../dbFunctions/dbconnection.php";

function approveStudent($sic) {
    $conn = dbConnection();
    // if (!isset($_SESSION['club_name'])) {
    //     die("Club name not set in session.");
    // }
    // $club_name = $_SESSION['club_name'];

    // Fetch student data from registered_student
    $qry = "SELECT * FROM registered_student WHERE sic = ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("s", $sic);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();

        // Fetch club_id using club_name
        $clubQry = "SELECT clubId FROM sports_club WHERE clubName = ?";
        $clubStmt = $conn->prepare($clubQry);
        $clubStmt->bind_param("s", $student['club']);
        $clubStmt->execute();
        $clubResult = $clubStmt->get_result();
        
        if ($clubResult->num_rows > 0) {
            $clubData = $clubResult->fetch_assoc();
            $club_id = $clubData['clubId'];
        } else {
            return false; // Club not found
        }

        // Convert DOB to password and hash it
        $dob_password = $student['dob'];

        // Insert data into club_member table
        $insertQry = "INSERT INTO club_member (club_id,club_name, name, email, password, sic, dept, year) 
                      VALUES (?,?, ?, ?, ?, ?, ?, ?)";

        $insertStmt = $conn->prepare($insertQry);
        if (!$insertStmt) {
            die("Prepare failed (INSERT): " . $conn->error);
        }

        $insertStmt->bind_param(
            "isssssss",
            $club_id,           // Club ID
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
