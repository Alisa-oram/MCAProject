<?php
    include_once "adminNavbar.php";
    session_start();
    require_once "../dbFunctions/student_function.php";

    $blogs = showBlog(); 
    if ($blogs) {
?>

<main class="col-md-10 ms-sm-auto px-md-4 mt-5" style="min-height: 100vh; padding-top: 70px;">
    <div class="row">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="table-responsive">
                <h2 class="mb-4 text-primary">Manage Blogs</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Published Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blogs as $blog): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($blog['title']); ?></td>
                            <td><?php echo htmlspecialchars($blog['date']); ?></td>
                            <td>
                                <a href="updateBlog.php?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-primary me-2">Update</a>
                                <a href="deleteBlog.php?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
        echo "<h1 class='text-center mt-5'>No Blogs Found</h1>";
    }
    include_once "adminFooter.php";
?>
