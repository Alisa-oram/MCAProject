<?php
require_once "../dbFunctions/dbconnection.php";

if (isset($_GET['id'])) {
    $clubId = $_GET['id'];
    $conn = dbConnection();

    $stmt = $conn->prepare("DELETE FROM sports_club WHERE clubId = ?");
    $stmt->bind_param("i", $clubId);

    if ($stmt->execute()) {
        echo "<script>
                alert('Club deleted successfully!');
                window.location.href='allClub.php';
              </script>";
    } else {
        echo "<script>
                alert('Error deleting club!');
                window.location.href='allClub.php';
              </script>";
    }

    $conn->close();
}
?>
