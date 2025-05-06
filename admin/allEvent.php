<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "admin_functions.php";

    $result = ShowEvents(); // This function should return a list of events from your DB
    if ($result) {
?>

<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
    <div class="row">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="table-responsive">
            <h2 class="mb-4 text-primary">Manage Events</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $event): ?>
                        <tr>
                            <td><?php echo $event['topic']; ?></td>
                            <td><?php echo $event['date']; ?></td>
                            <td>
                                <a href="updateEvent.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-primary me-2">Update</a>
                                <a href="deleteEvent.php?id=<?php echo $event['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
        echo "<h1>No Events Found</h1>";
    }
    include_once "adminFooter.php";
?>
