<?php
require_once "../dbFunctions/dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $conn = dbConnection();
    $club_name = $_POST['club_name'];
    $coach_email = $_POST['coach_email']; // or ID if you have it
    $attendance_date = $_POST['attendance_date'];
    $student_sic = $_POST['student_ids'];
    $attendance = $_POST['attendance'];

    $duplicates = 0;
    $inserted = 0;
    foreach ($student_sic as $student_sic) {
        $status = isset($attendance[$student_sic]) ? 'Present' : 'Absent';

        // Check for duplicate
        $stmt = $conn->prepare("SELECT id FROM attendance WHERE student_sic = ? AND attendance_date = ?");
        $stmt->bind_param("ss", $student_sic, $attendance_date);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 0) {
            // Insert if not found
            $insert = $conn->prepare("INSERT INTO attendance (student_sic, club_name, attendance_date, status, coach_email) VALUES (?, ?, ?, ?, ?)");
            $insert->bind_param("sssss", $student_sic, $club_name, $attendance_date, $status, $coach_email);
            $insert->execute();
            $inserted++;
        } else {
            $duplicates++;
        }
    }

    echo "Attendance submitted successfully for {$inserted} students.";
    if ($duplicates > 0) {
        echo " {$duplicates} records were skipped to avoid duplicates.";
    }
}


?>