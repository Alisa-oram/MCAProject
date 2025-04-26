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
        <form id="MatchTeamForm">
            <input type="hidden" name="club_name" value="<?php echo $sportsclub; ?>">
            <input type="hidden" name="coach_email" value="<?php echo $email; ?>">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sic</th><th>Name</th><th>Club</th><th>Dept</th><th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $std){ ?>
                            <tr>
                                <td><?php echo $std['sic']; ?></td>
                                <td><?php echo $std['name']; ?></td>
                                <td><?php echo $std['club_name']; ?></td>
                                <td><?php echo $std['dept']; ?></td>
                                <td>
                                    <input type="hidden" name="student_ids[]" value="<?php echo $std['sic']; ?>">
                                    <input type="hidden" name="student_names[]" value="<?php echo $std['name']; ?>">
                                    <input type="checkbox" name="teams[<?php echo $std['sic']; ?>]" value="Select" checked>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="mb-3 text-end">
            <input type="submit" class="btn btn-success" value="Submit Team" name="submit">
           
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
$('#MatchTeamForm').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: 'submit_team.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response){
            $('#responseMsg').html('<div class="alert alert-info">' + response + '</div>');
        }
    });
});

</script>

<?php include_once "../coach/coachFooter.php"; ?>
