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
    $student_name = $_POST['student_names'];

    $duplicates = 0;
    $inserted = 0;
    foreach ($student_sic as $index => $student_sic) {
        $status = isset($attendance[$student_sic]) ? 'Present' : 'Absent';
        $name = $student_name[$index]; // get the correct student name for this SIC


        // Check for duplicate
        $stmt = $conn->prepare("SELECT id FROM attendance WHERE student_sic = ? AND attendance_date = ?");
        $stmt->bind_param("ss", $student_sic, $attendance_date);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 0) {
            // Insert if not found
            $insert = $conn->prepare("INSERT INTO attendance (student_sic, club_name, attendance_date, status, coach_email,student_name) VALUES (?, ?, ?, ?, ?,?)");
            $insert->bind_param("ssssss", $student_sic, $club_name, $attendance_date, $status, $coach_email,$name);
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