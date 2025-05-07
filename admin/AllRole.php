<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "admin_functions.php";
    // if(isset($_GET['club'])){
    //     $_SESSION['club_name'] = $_GET['club']; // Store club name in session
        
    //     $sportsclub = $_GET['club'];
    $result = ShowRole();
    if($result){
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <div class="table-responsive">
        <h2 class="mb-4 text-primary">Manage Coaches</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th><th>Club</th><th>role</th><th>email</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <pre> -->
                 <?php
                    foreach ($result as $coach){
                        // print_r($emp);
                        ?>
                            <tr>
                                
                                <td><?php echo $coach['name'] ?></td>
                                <td><?php echo $coach['club'] ?></td>
                                <td><?php echo $coach['role'] ?></td>
                                <td><?php echo $coach['email'] ?></td>    
                            
                                <td>
                                    <a href="deleteRole.php?id=<?php echo $coach['id'] ?>"  class="btn btn-sm btn-danger">Delete</a>
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