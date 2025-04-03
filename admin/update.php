<?php
require_once "ApproveStudent.php";

if (isset($_GET['sic'])) {
    $sic = $_GET['sic'];

    if (approveStudent($sic)) {
        echo "<script>alert('Student approved and moved to club_member!'); window.location.href='manageStudent.php';</script>";
    } else {
        echo "<script>alert('Error approving student!'); window.location.href='manageStudent.php';</script>";
    }
}
?>
