<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['club'])) {
    header("Location: ../login.php");
    exit();
}

include_once "../coach/coachNavbar.php";
require_once "../dbFunctions/dbconnection.php"; 
$email = $_SESSION['email'];
$club = $_SESSION['club'];

// Fetch distinct dates with attendance records for the coach's club
$conn = dbConnection();
$date_query = $conn->prepare("SELECT DISTINCT attendance_date FROM attendance WHERE club_name = ? ORDER BY attendance_date DESC");
$date_query->bind_param("s", $club);
$date_query->execute();
$dates_result = $date_query->get_result();
?>

<main class="col-md-10 ms-sm-auto px-md-4 mt-5"style="min-height: 100vh; padding-top: 70px;">
<div class="container-fluid py-5" style="max-width: 1200px;">
<div class=" p-4 mx-auto text-center ">
<h1 class="text-center fw-bold mb-4 text-primary">View & Edit Attendance</h1>

        <form method="GET" class="mb-4">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <label for="attendance_date" class="form-label">Select Date:</label>
            <select name="attendance_date" id="attendance_date" class="form-select" onchange="this.form.submit()" required>
                <option value="">-- Select Date --</option>
                <?php while ($row = $dates_result->fetch_assoc()){ ?>
                    <option value="<?php echo $row['attendance_date']; ?>" <?php echo (isset($_GET['attendance_date']) && $_GET['attendance_date'] == $row['attendance_date']) ? 'selected' : ''; ?>>
                        <?php echo $row['attendance_date']; ?>
                    </option>
                <?php } ?>
            </select>
            </div>
        </div>
        </form>

    <?php
        if (isset($_GET['attendance_date'])){    
            $selected_date = $_GET['attendance_date'];
            $stmt = $conn->prepare("SELECT * FROM attendance WHERE club_name = ? AND attendance_date = ?");
            $stmt->bind_param("ss", $club, $selected_date);
            $stmt->execute();
            $attendance_result = $stmt->get_result();
        }
        if ($attendance_result->num_rows > 0)
        {
    ?>
        <form method="POST" action="updateAttendance.php" class="w-75 mx-auto">
                <input type="hidden" name="attendance_date" value="<?php echo $selected_date; ?>">
                <div class="table-responsive ">
                    <table class="table  table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>SIC</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $attendance_result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $row['student_sic']; ?></td>
                                    <td><?php echo $row['student_name']; ?></td>
                                    <td>
                                        <select name="attendance[<?php echo $row['id']; ?>]" class="form-select">
                                            <option value="Present" <?php echo ($row['status'] === 'Present') ? 'selected' : ''; ?>>Present</option>
                                            <option value="Absent" <?php echo ($row['status'] === 'Absent') ? 'selected' : ''; ?>>Absent</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                <input type="submit" class="btn btn-primary btn-lg px-5" name="submit" value="Update Attendance">
            </div>
     </form>
        <?php }else{ ?>
            <p>No attendance records found for <?php echo $selected_date; ?>.</p>
        <?php 
        }
         ?>
    </div>
     <?php
// if (isset($_GET['updated'])) {
//     echo '<div class="alert alert-success">Successfully updated ' . $_GET['updated'] . ' record(s).</div>';
// }
?> 
<?php if (isset($_GET['updated'])) { ?>
            <div class="alert alert-success alert-dismissible fade show mt-4 text-center" role="alert">
                Successfully updated <?php echo htmlspecialchars($_GET['updated']); ?> record(s).
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
</div>
</div>
</main>


<?php include_once "../coach/coachFooter.php"; ?>
