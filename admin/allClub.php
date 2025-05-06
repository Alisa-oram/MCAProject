<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "admin_functions.php";

    $result = allClubs(); 
    if ($result) {
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
    <div class="row">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="table-responsive">
                <h2 class="mb-4 text-primary">Manage Clubs</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Club ID</th>
                            <th>Club Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $club): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($club['clubId']); ?></td>
                            <td><?php echo htmlspecialchars($club['clubName']); ?></td>
                            <td>
                                <a href="deleteClub.php?id=<?php echo $club['clubId']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this club?');">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
    } else {
        echo "<h1 class='text-center text-white'>No Clubs Found</h1>";
    }
    include_once "adminFooter.php";
?>
