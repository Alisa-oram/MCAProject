<?php
include_once "adminNavbar.php";
session_start();
require_once "admin_functions.php";

$result = ShowMatches(); // You'll need to define this function in admin_functions.php

if ($result) {
?>
<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
<div class="row">
    <div class="col-md-10 mt-5 mx-auto">
        <div class="table-responsive">
        <h2 class="mb-4 text-primary">Manage Matches</h2>
            <table class="table table-striped text-white">
                <thead>
                    <tr>
                        <th>Match</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    foreach ($result as $match) {
                        ?>
                        <tr>
                            <td><?php echo $match['team_a'] . " vs " . $match['team_b']; ?></td>
                            <td><?php echo $match['match_datetime']; ?></td>
                            <td>
                                <a href="editMatch.php?id=<?php echo $match['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="completeMatch.php?id=<?php echo $match['id']; ?>" class="btn btn-sm btn-success">Mark as Completed</a>
                            </td>
                        </tr>
                        <?php
                    }
                 ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
<?php
} else {
    echo "<h1 class='text-center text-white'>No Matches Found</h1>";
}
include_once "adminFooter.php";
?>
