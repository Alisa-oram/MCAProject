<?php
require_once "../dbFunctions/dbconnection.php";
$conn = dbConnection();

// Mark all notifications as read when admin visits this page
$conn->query("UPDATE notifications SET is_read = TRUE WHERE is_read = FALSE");
?>

<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "studentdb.php";
    // if(isset($_GET['club'])){
    //     $_SESSION['club_name'] = $_GET['club']; // Store club name in session
        
    //     $sportsclub = $_GET['club'];
    // }
    $result = StudentClub();
    if($result){
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sic</th><th>Name</th><th>Club</th><th>Dept</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <pre> -->
                 <?php
                    foreach ($result as $std){
                        // print_r($emp);
                        ?>
                            <tr>
                                <td><?php echo $std['sic'] ?></td>
                                <td><?php echo $std['name'] ?></td>
                                <td><?php echo $std['club'] ?></td>
                                <td><?php echo $std['dept'] ?></td>
                                <td>
                                    <a href="update.php?sic=<?php echo $std['sic'] ?>"  class="btn btn-sm btn-warning">Approve</a>
                                    <a href="delete.php?sic=<?php echo $std['sic'] ?>"  class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                    }
                 ?>
                 <!-- </pre> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
} else {
    echo "<h1>No Data Found</h1>";
}
// }
?>
</main>

<?php include_once "adminFooter.php"; ?>