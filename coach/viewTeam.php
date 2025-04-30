<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['club'])) {
    header("Location: ../login.php");
    exit();
}

include_once "../coach/coachNavbar.php";
require_once "../dbFunctions/dbconnection.php"; 

$email = $_SESSION['email'];
$sportsclub = $_SESSION['club'];

$conn = dbconnection();

// Fetch all team records created by this coach
$query = "SELECT * FROM match_teams WHERE coach_email = ? AND club_name = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $sportsclub);
$stmt->execute();
$result = $stmt->get_result();
?>

<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px; background-color: #f0f2f5;">
<div class="row">
    <div class="col-md-10 mx-auto mt-5">
        <div class=" rounded-4 p-4">
            <h2 class="text-center mb-4" style="font-weight:700;">View Created Teams</h2>

            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" id="searchInput" class="form-control form-control-lg rounded-3" placeholder="Search by SIC or Name...">
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle" id="teamsTable">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>SIC</th>
                            <th>Student Name</th>
                            <th>Club</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $row['student_sic']; ?></td>
                                <td><?php echo $row['student_name']; ?></td>
                                <td><?php echo $row['club_name']; ?></td>
                                <td><?php echo date("d M Y", strtotime($row['created_at'])); ?></td>
                            </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>No Team Created Yet.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>

<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script>
// Live Search Filter
$('#searchInput').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#teamsTable tbody tr').filter(function() {
        $(this).toggle(
            $(this).text().toLowerCase().indexOf(value) > -1
        );
    });
});
</script>

<?php include_once "../coach/coachFooter.php"; ?>
