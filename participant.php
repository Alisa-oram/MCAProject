<?php
include_once "./fragments/navbar.php";
require_once "./dbFunctions/dbconnection.php";
// Database connection
$conn = dbConnection(); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM participants");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Participants</title>
    <link rel="stylesheet" href="">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">All Participants</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Event</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= $row['role'] ?></td>
                    <td><?= htmlspecialchars($row['department']) ?></td>
                    <td><?= htmlspecialchars($row['event_name']) ?></td>
                    <td><?= $row['registered_at'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php $conn->close(); ?>
