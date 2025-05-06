<?php
session_start();
if (!isset($_SESSION['sic'])) {
    header("Location: login.php");
    exit();
}

$sic = $_SESSION['sic'];

// Database connection
require_once "../dbFunctions/dbconnection.php";
$conn = dbConnection();

// Fetch remarks for the student
$stmt = $conn->prepare("SELECT * FROM student_remarks WHERE student_sic = ?");
$stmt->bind_param("s", $sic);
$stmt->execute();
$result = $stmt->get_result();
?>

<head>
<style>
    body {
      background-color: #f1f3f5;
      display: flex;
      flex-direction: column;
      height: 100vh;
      margin: 0;
    }
    .main-content {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    .attendance-card {
      width: 100%;
      max-width: 900px; /* Adjust width as needed */
      background-color: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .table thead {
      background-color: #0d6efd;
      color: white;
    }
    .star-icon {
      color: gold;
      font-size: 1.2rem;
    }
    footer {
      text-align: center;
      padding: 10px 0;
      background-color: #0d6efd;
      color: white;
    }
</style>
</head>

<body>
    <?php include_once "../fragments/navbar.php"; ?>

    <div class="main-content"> 
        <div class="attendance-card"> 
            <h2 class="text-center text-primary fw-bold mb-4">My Remarks</h2>

            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Date</th>
                            <th>Sic</th>
                            <th>Ratings</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['remark_date']; ?></td>
                            <td><?php echo $row['student_sic']; ?></td>
                            <td>
                                <?php
                                    $stars = intval($row['stars']);
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo $i <= $stars
                                            ? '<i class="bi bi-star-fill star-icon"></i>'
                                            : '<i class="bi bi-star star-icon" style="color: #ccc;"></i>';
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div> <!-- end .attendance-card -->
    </div> <!-- end .main-content -->

    <?php include_once "../fragments/footer.php"; ?>

</body>
