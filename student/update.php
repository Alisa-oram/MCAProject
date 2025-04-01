<?php
session_start(); // Start session to access session variables
require_once "functions.php";

if (isset($_GET['sic'])) {
    $sic = $_GET['sic'];

    if (approveStudent($sic)) {
        echo "<script>
                alert('Student approved and moved to club_member!');
                window.location.href='addStudentClub.php?club=" . $_SESSION['club_name'] . "';
              </script>";
    } else {
        echo "<script>
                alert('Error approving student!');
                window.location.href='addStudentClub.php?club=" . $_SESSION['club_name'] . "';
              </script>";
    }
}
?>
