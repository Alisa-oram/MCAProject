<?php
session_start();
// Redirect if not logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['club'])) {
    header("Location: ../login.php");
    exit();
}
include_once "../coach/coachNavbar.php"; 
require_once "../admin/studentdb.php";
$email = $_SESSION['email'];
$sportsclub = $_SESSION['club'];
$result = ClubMember($sportsclub); // Function that fetches students in the given club

    if ($result) {
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <form id="attendanceForm">
            <input type="hidden" name="club_name" value="<?php echo $sportsclub; ?>">
            <input type="hidden" name="coach_email" value="<?php echo $email; ?>">
                <div class="mb-3">
            <label for="attendance_date" class="form-label">Select Date:</label>
            <input type="date" name="attendance_date" id="attendance_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
              </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sic</th><th>Name</th><th>Club</th><th>Dept</th><th>Present</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $std): ?>
                            <tr>
                                <td><?php echo $std['sic']; ?></td>
                                <td><?php echo $std['name']; ?></td>
                                <td><?php echo $std['club_name']; ?></td>
                                <td><?php echo $std['dept']; ?></td>
                                <td>
                                    <input type="hidden" name="student_ids[]" value="<?php echo $std['sic']; ?>">
                                    <input type="checkbox" name="attendance[<?php echo $std['sic']; ?>]" value="Present" checked>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- <button type="submit" class="btn btn-success">Submit Attendance</button> -->
            <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Submit Attendance</button>
           <!-- <button type="button" class="btn  btn-primary me-2" onclick="markAll('Present')">Mark All Present</button>
           <button type="button" class="btn  btn-danger" onclick="markAll('Absent')">Mark All Absent</button> -->
           </div>     
        </form>
        <div id="responseMsg" class="mt-3"></div>
    </div>
</div>
<?php
    } else {
        echo "<h1>No Data Found</h1>";
    }

?>
</main>

<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script>
$('#attendanceForm').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: 'submit_attendance.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response){
            $('#responseMsg').html('<div class="alert alert-info">' + response + '</div>');
        }
    });
});
//for marking all student present or absent
// function markAll(status){
//     const checkboxes = document.querySelectorAll("input[type = 'checkbox'][name^ = 'attendance']");
//     checkboxes.forEach(cb =>
//     {cb.checked =(status === 'Present');

//     });
// }
</script>

<?php include_once "../coach/coachFooter.php"; ?>
