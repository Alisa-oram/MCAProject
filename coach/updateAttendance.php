<?php
require_once "../dbFunctions/dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['attendance'])) {
    $attendance = $_POST['attendance'];
    $updated = 0;

    foreach ($attendance as $record_id => $status) {
        $conn = dbConnection();
        $stmt = $conn->prepare("UPDATE attendance SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $record_id);
        if ($stmt->execute()) {
            $updated++;
        }
    }

    header("Location: view_attendance.php?attendance_date=" . $_POST['attendance_date'] . "&updated=" . $updated);
    exit();
} else {
    echo "Invalid request!";
}
