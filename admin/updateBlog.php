<?php
require_once "../dbFunctions/dbconnection.php";
session_start();

if (isset($_GET['id'])) {
    $conn = dbConnection();
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM blog WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $detail = $_POST['detail'];

        if ($_FILES['image']['name']) {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $target = "../uploads/" . basename($image);
            move_uploaded_file($tmp_name, $target);

            $stmt = $conn->prepare("UPDATE blog SET title=?, date=?, image=?, detail=? WHERE id=?");
            $stmt->bind_param("ssssi", $title, $date, $image, $detail, $id);
        } else {
            $stmt = $conn->prepare("UPDATE blog SET title=?, date=?, detail=? WHERE id=?");
            $stmt->bind_param("sssi", $title, $date, $detail, $id);
        }

        if ($stmt->execute()) {
            echo "<script>
                    alert('Blog updated successfully!');
                    window.location.href='allBlog.php';
                  </script>";
        } else {
            echo "<script>alert('Update failed');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Blog</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #4b588b;
        }
        .form-container {
            max-width: 700px;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-icon-back {
            display: inline-block;
            margin: 15px 25px;
            font-size: 1.8rem;
            /* color: transparent;  */
            background-color: transparent;
            border: none;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        .btn-icon-back i {
            color: black; 
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }
    </style>
</head>
<body>
<div style="position: absolute; top: 20px; left: 20px;">
    <a href="allBlog.php" class="btn-icon-back" title="Go Back">
        <i class="bi bi-arrow-left-circle fs-3"></i>
    </a>
</div>
<div class="container">
    <div class="form-container mx-auto">
        <h2 class="text-center text-primary mb-4">Update Blog</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="<?= $blog['title'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" name="date" class="form-control" value="<?= $blog['date'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload New Image (optional):</label>
                <input type="file" name="image" class="form-control">
                <small class="text-muted">Current: <?= basename($blog['image']) ?></small>
            </div>
            <div class="mb-3">
                <label class="form-label">Detail:</label>
                <textarea name="detail" class="form-control" rows="5" required><?= $blog['detail'] ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary w-100">Update</button>
        </form>
    </div>
</div>
</body>
</html>
