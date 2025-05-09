<?php
session_start();
if (!isset($_SESSION['sic'])) {
    header("Location: login.php");
    exit();
}

$sic = $_SESSION['sic'];
$club = $_SESSION['club_name'];
include_once "studentnav.php";
require_once "../dbFunctions/dbconnection.php";
$conn = dbConnection();

// Get all attendance records for the student
$stmt = $conn->prepare("SELECT * FROM attendance WHERE student_sic = ? ORDER BY attendance_date DESC");
$stmt->bind_param("s", $sic);
$stmt->execute();
$attendance_result = $stmt->get_result();
?>

<head>

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 15px;
            min-height: calc(100vh - 120px); /* 60px header + 60px footer */
        }
        .attendance-card {
            width: 100%;
            max-width: 800px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }
        .form-select {
            font-size: 1rem;
            padding: 0.5rem;
        }
        .badge {
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }
        .btn-icon-back {
            display: inline-block;
            margin: 15px 25px;
            font-size: 1.8rem;
            color: transparent; /* Transparent initially */
            background-color: transparent;
            border: none;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        .btn-icon-back i {
            color: transparent; /* Icon is invisible initially */
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; /* Bootstrap primary blue on hover */
        }
        .btn-icon-back {
            display: inline-block;
            margin: 15px 25px;
            font-size: 1.8rem;
            color: transparent; 
            background-color: transparent;
            border: none;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        .btn-icon-back i {
            color: transparent; 
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }

    </style>
</head>

<body>
<a href="myAccount.php" class="btn-icon-back" title="Go Back" style="margin-top:80px">
    <i class="bi bi-arrow-left-circle"></i>
</a>
<div class="main-content">
    <div class="attendance-card">
        <h2 class="text-center text-primary ew-bold mb-4">My Attendance</h2>
     <?php
            if ($attendance_result->num_rows > 0) {
            ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Date</th>
                            <th>Sic</th>
                            <th>Status</th>
                            <th>Club</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $attendance_result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['attendance_date']; ?></td>
                            <td><?php echo $row['student_sic']; ?></td>
                            <td>
                                <?php if ($row['status'] == 'Present'): ?>
                                    <span class="badge bg-success">Present</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Absent</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $row['club_name']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php
            } else {
                echo "<p class='text-muted text-center'>No attendance records found.</p>";
            }
            ?>
        </div>
    </div> <!-- end .main-content -->
</body>
