<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Club</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background-color: rgb(75, 88, 139);
    }
    .form-container {
        width: 700px;
        background: rgba(255,255,255, 0.7);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        width: 50%;
        padding: 10px;
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
            color:rgb(12, 16, 23); 
            /* transition: color 0.3s ease; */
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }

</style>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div style="position: absolute; top: 20px; left: 20px;">
        <a href="member.php" class="btn-icon-back" title="Go Back">
            <i class="bi bi-arrow-left-circle fs-3"></i>
        </a>
    </div>
      <div class="form-container">
          <h2 class="text-center text-primary mb-4">Add New Club</h2>
          <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Club Name:</label>
                  <input type="text" name="name" placeholder="Enter Club Name" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Club ID:</label>
                  <input type="text" name="clubId" placeholder="Enter Club ID" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Club Image:</label>
                  <input type="file" name="image" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Club Details:</label>
                  <textarea name="details" rows="4" class="form-control" placeholder="Enter club description" required></textarea>
              </div>
              <button type="submit" name="add" class="btn btn-primary">Add</button>
          </form>
      </div>
  </div>
  <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $clubId = $_POST['clubId'];
    $details = $_POST['details'];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $target = "../uploads/" . basename($image);

        if (move_uploaded_file($tmp_name, $target)) {
            require_once "admin_functions.php";
            $res = addClub($name, $clubId, $image, $details); 

            if ($res) {
                echo "<script>
                alert('Club added successfully!');
                window.location.href = 'Member.php';
                </script>";
                exit;
            } else {
                echo "<script>alert('Error while adding club.');</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image.');</script>";
        }
    } else {
        echo "<script>alert('Please upload an image.');</script>";
    }
}
?>
