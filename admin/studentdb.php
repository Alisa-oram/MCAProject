<?php
require_once "../dbFunctions/dbconnection.php"; 

function regStudent($name,$sic,$sport,$dob,$email,$department,$year){
    $conn = dbConnection();
    try{
        $qry = "INSERT INTO registered_student (name,sic,club,dob,email,dept,year) VALUES(?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sssssss",$name,$sic,$sport,$dob,$email,$department,$year);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        // Insert a notification for the admin
        $notificationMsg = "New student registered in " . $sport;
        $notifQry = "INSERT INTO notifications (message, is_read) VALUES (?, FALSE)";
        $notifStmt = $conn->prepare($notifQry);
        $notifStmt->bind_param("s", $notificationMsg);
        $notifStmt->execute();
        
        return $res;
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}
function studentClub() {
    $conn = dbConnection();

    try {
        // Prepare the query with a placeholder
        // $qry = "SELECT * FROM registered_student WHERE club = ?";
        $qry = "SELECT * FROM registered_student ";
        $stmt = $conn->prepare($qry);

        // Check if statement preparation was successful
        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }

        // Bind the parameter safely
        // $stmt->bind_param('s', $sportsclub);

        // Execute the query
        if (!$stmt->execute()) {
            throw new Exception("Query execution failed: " . $stmt->error);
        }

        // Fetch result
        $res = $stmt->get_result();

        // Check if any data exists
        if ($res->num_rows > 0) {
            $result = [];
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
            return $result; // Return fetched data
        } else {
            return false; // No data found
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

function ClubMember($sportsclub){
    $conn = dbConnection(); // Ensure $conn is a valid database connection

    try {
        // Prepare the query with a placeholder
        $qry = "SELECT * FROM club_member WHERE club_name = ?";
       
        $stmt = $conn->prepare($qry);

        // Check if statement preparation was successful
        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }

        // Bind the parameter safely
        $stmt->bind_param('s', $sportsclub);

        // Execute the query
        if (!$stmt->execute()) {
            throw new Exception("Query execution failed: " . $stmt->error);
        }

        // Fetch result
        $res = $stmt->get_result();

        // Check if any data exists
        if ($res->num_rows > 0) {
            $result = [];
            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
            return $result; // Return fetched data
        } else {
            return false; // No data found
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $sic = $_POST["sic"];
    $sport = $_POST["sport"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $year = $_POST["year"];

    if (regStudent($name, $sic, $sport, $dob, $email, $department, $year)) {
        echo "<script>alert('Successfully Registered!'); window.location.href='../student/regform.php';</script>";
    } else {
        echo "<script>alert('Error Registering!'); window.location.href='../student/regform.php';</script>";
    }
}
?>