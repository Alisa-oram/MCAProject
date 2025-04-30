<?php
session_start();
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
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <form id="remarkForm">
            <input type="hidden" name="club_name" value="<?php echo $sportsclub; ?>">
            <input type="hidden" name="coach_email" value="<?php echo $email; ?>">

            <div class="mb-3">
                <label for="remark_date" class="form-label">Select Date:</label>
                <input type="date" name="remark_date" id="remark_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
            </div>

            <div class="table-responsive">
                <table class="table table-striped text-center align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>SIC</th>
                            <th>Name</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $std) { ?>
                            <tr>
                                <td><?php echo $std['sic']; ?></td>
                                <td><?php echo $std['name']; ?></td>
                                <td>
                                    <input type="hidden" name="student_ids[]" value="<?php echo $std['sic']; ?>">
                                    <input type="hidden" name="student_names[]" value="<?php echo $std['name']; ?>">
                                    
                                    <div class="star-rating" data-sic="<?php echo $std['sic']; ?>">
                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                            <span class="star" data-value="<?php echo $i; ?>">&#9734;</span>
                                        <?php } ?>
                                    </div>
                                    <input type="hidden" name="remarks[<?php echo $std['sic']; ?>]" value="0">
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-success px-4">Submit Remarks</button>
            </div>
        </form>
        <div id="responseMsg" class="mt-3"></div>
    </div>
</div>
</main>

<?php
} else {
    echo "<h1 class='text-center'>No Students Found</h1>";
}
?>

<script src="../assets/jquery/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    $('.star-rating .star').on('click', function() {
        var value = $(this).data('value');
        var container = $(this).parent();
        var sic = container.data('sic');

        // Set hidden input value
        container.next('input[name="remarks['+sic+']"]').val(value);

        // Fill stars
        container.find('.star').each(function() {
            if ($(this).data('value') <= value) {
                $(this).html('&#9733;'); // Filled star
            } else {
                $(this).html('&#9734;'); // Empty star
            }
        });
    });

    $('#remarkForm').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: 'submit_remarks.php', // create this PHP file to handle saving
            type: 'POST',
            data: $(this).serialize(),
            success: function(response){
                $('#responseMsg').html('<div class="alert alert-success">' + response + '</div>');
            }
        });
    });
});
</script>

<style>
.star-rating .star {
    font-size: 24px;
    cursor: pointer;
    color: gold;
}
</style>

<?php include_once "../coach/coachFooter.php"; ?>
