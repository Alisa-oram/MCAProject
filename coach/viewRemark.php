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

$conn = dbConnection();

// Fetch remarks for coach's club
$stmt = $conn->prepare("SELECT * FROM student_remarks WHERE club_name = ? ORDER BY remark_date DESC, student_name ASC");
$stmt->bind_param("s", $club);
$stmt->execute();
$result = $stmt->get_result();
?>

<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="container-fluid py-5" style="max-width: 1200px;">
<div class=" p-4 mx-auto text-center ">
    <h1 class="text-center fw-bold mb-4 text-primary">Student Remarks</h1>
    <div class="row mb-4">
        <div class="col-md-4 mb-2">
            <input type="text" id="searchSIC" class="form-control" placeholder="Search by SIC...">
        </div>
        
    <?php if ($result->num_rows > 0) { ?>
        <div class="table-responsive">
            <table id="remarksTable" class="table table-bordered table-striped align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>SIC</th>
                        <th>Name</th>
                        <th>Club</th>
                        <th>Remark Date</th>
                        <th>Stars</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="sic"><?php echo $row['student_sic']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['club_name']; ?></td>
                            <td class="remark-date"><?php echo $row['remark_date']; ?></td>
                            <td class="stars" data-stars="<?php echo (int)$row['stars']; ?>">
                                <?php
                                $stars = (int)$row['stars'];
                                for ($i = 1; $i <= 5; $i++) {
                                    echo ($i <= $stars) ? '&#9733;' : '&#9734;';
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <div class="alert alert-info text-center">No remarks available yet.</div>
    <?php } ?>
</div>
</main>

<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script>
// SEARCH by SIC
$('#searchSIC').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $("#remarksTable tbody tr").filter(function() {
        $(this).toggle($(this).find('.sic').text().toLowerCase().indexOf(value) > -1)
    });
});
</script>

<?php include_once "../coach/coachFooter.php"; ?>
