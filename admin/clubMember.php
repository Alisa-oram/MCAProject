<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "studentdb.php";
    // if(isset($_GET['club'])){
    //     $_SESSION['club_name'] = $_GET['club']; // Store club name in session
    if(isset($_GET['club_name'])){
        $sportsclub = $_GET['club_name'];
        // $sportsclub = $_GET['club'];
    $result = ClubMember($sportsclub);
    if($result){
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sic</th><th>Name</th><th>Club</th><th>Dept</th>
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
                                <td><?php echo $std['club_name'] ?></td>
                                <td><?php echo $std['dept'] ?></td>
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
}
?>
</main>

<?php include_once "adminFooter.php"; ?>