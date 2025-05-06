<?php
session_start();
require_once "../dbFunctions/dbconnection.php";

if (!isset($_GET['id'])) {
    echo "<script>
            alert('No blog ID provided.');
            window.location.href='allBlog.php';
          </script>";
    exit;
}

$conn = dbConnection();
$id = $_GET['id'];

// Prepare the delete statement for blog
$stmt = $conn->prepare("DELETE FROM blog WHERE id = ?");
if (!$stmt) {
    echo "<script>
            alert('Failed to prepare the delete statement.');
            window.location.href='allBlog.php';
          </script>";
    exit;
}

$stmt->bind_param("i", $id); // Assuming `id` is an integer

if ($stmt->execute()) {
    echo "<script>
            alert('Blog deleted successfully!');
            window.location.href='allBlog.php';
          </script>";
} else {
    echo "<script>
            alert('Error deleting blog!');
            window.location.href='allBlog.php';
          </script>";
}
?>
