<?php
session_start();
require_once "../dbFunctions/dbconnection.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = dbConnection(); 

    $club_name = $_POST['club_name'];
    $coach_email = $_POST['coach_email'];
    $remark_date = $_POST['remark_date'];
    $student_ids = $_POST['student_ids'];
    $student_names = $_POST['student_names'];
    $remarks = $_POST['remarks'];

    $success_count = 0;
    $error_count = 0;

    // Loop through all students
    foreach ($student_ids as $index => $sic) {
        $student_name = $student_names[$index];
        $stars = $remarks[$sic]; // Star value (0-5)

        if ($stars > 0) { // Only insert if coach gave at least 1 star
            $stmt = $conn->prepare("INSERT INTO student_remarks (student_sic, student_name, club_name, coach_email, remark_date, stars) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $sic, $student_name, $club_name, $coach_email, $remark_date, $stars);

            if ($stmt->execute()) {
                $success_count++;
            } else {
                $error_count++;
            }
            $stmt->close();
        }
    }

    $conn->close();

    echo "Successfully submitted remarks for {$success_count} students.";
} else {
    echo "Invalid request.";
}
?>
