<?php
require_once "./dbFunctions/student_function.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $blog = getBlogById($id);

    if ($blog) {
?>
    <div class="container w-75" style="font-family: 'Old Baskerville'; margin-top: 100px;">
        <div class="card mt-4 mb-4">
            <div class="card-body">
                <!-- Blog Image -->
                <img src="uploads/<?php echo htmlspecialchars($blog['image']); ?>" class="card-img-top w-100 mb-4" alt="Blog Image">

                <!-- Blog Title -->
                <h5 class="card-title fw-bold fs-1"><?php echo htmlspecialchars($blog['title']); ?></h5>

                <!-- Blog Date -->
                <p class="card-text fs-4"><?php echo "Upload date: " . date('F d, Y', strtotime($blog['date'])); ?></p>

                <!-- Blog Content -->
                <p class="card-text fs-5"><?php echo nl2br(htmlspecialchars($blog['detail'])); ?></p>
            </div>
        </div>
    </div>
<?php
    } else {
        echo "<p class='text-center mt-5'>Blog not found.</p>";
    }
} else {
    echo "<p class='text-center mt-5'>No blog ID specified.</p>";
}
?>
