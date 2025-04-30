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
$result = ClubMember($sportsclub);

if ($result) {
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px; background-color: #f8f9fa;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <div class="rounded-4 p-4 w-100">
            <h2 class="text-center mb-4" style="font-weight: 700;">Create Match Team</h2>
            <form id="MatchTeamForm">
                <input type="hidden" name="club_name" value="<?php echo $sportsclub; ?>">
                <input type="hidden" name="coach_email" value="<?php echo $email; ?>">
                <div class="mb-3">
                <label class="form-label fs-5 fw-bold">Team Name</label>
                <input type="text" name="teamName" id="teamName" placeholder="Enter the team name" class="form-control form-control-lg rounded-3" required>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SIC</th>
                                <th scope="col">Name</th>
                                <th scope="col">Club</th>
                                <th scope="col">Department</th>
                                <th scope="col" class="text-center">Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $std) { ?>
                                <tr>
                                    <td><?php echo $std['sic']; ?></td>
                                    <td><?php echo $std['name']; ?></td>
                                    <td><?php echo $std['club_name']; ?></td>
                                    <td><?php echo $std['dept']; ?></td>
                                    <td class="text-center">
                                        <input type="checkbox" name="teams[]" value="<?php echo $std['sic']; ?>" class="form-check-input">
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-success btn-lg rounded-3 px-5">
                        <i class="bi bi-people-fill me-2"></i>Submit Team
                    </button>
                </div>     
            </form>
            <div id="responseMsg" class="mt-4"></div>
        </div>
    </div>
</div>
</main>

<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script>
$('#MatchTeamForm').submit(function(e){
    e.preventDefault();
    
    $.ajax({
        url: 'submit_team.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response){
            $('#responseMsg').html('<div class="alert alert-success rounded-3 p-3">' + response + '</div>');
            $('#MatchTeamForm')[0].reset();
        },
        error: function(){
            $('#responseMsg').html('<div class="alert alert-danger rounded-3 p-3">Something went wrong. Please try again.</div>');
        }
    });
});
</script>

<?php include_once "../coach/coachFooter.php"; ?>
<?php
} else {
    echo "<main class='text-center mt-5'><h2>No Students Found!</h2></main>";
}
?>
