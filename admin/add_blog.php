<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"> 
</head>
<style>
    body {
        background-color: rgb(75, 88, 139);
    }
    .form-container {
        max-width: 700px;
        background: rgba(255,255,255, 0.7);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        width: 100%;
        padding: 10px;
    }
</style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="form-container">
          <h2 class="text-center text-primary mb-4">Publish a Blog</h2>
          <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Title:</label>
                  <input type="text" name="title" placeholder="Enter your title" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Date:</label>
                  <input type="date" name="date" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Upload Image:</label>
                  <input type="file" name="image" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Description:</label>
                  <textarea name="article" class="form-control" rows="5" placeholder="Enter event details" required></textarea>
              </div>
              <button type="submit" name="add" class="btn btn-primary">Upload</button>
          </form>
      </div>
  </div>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $image = $_FILES['image'];
    $content = $_POST['article'];
    $new_name = time()."-".$image['name'];
    $upload_path="../uploads/".$new_name;
    if(move_uploaded_file($image['tmp_name'],$upload_path)){
    require_once "admin_functions.php";
    $res = addBlog($title,$date,$new_name,$content);
    if($res){
        echo "<script>
        alert('Blog added successfully!');
        window.location.href = 'add_blog.php';
    </script>";
    exit;
        
    } else {
        echo " Error While Adding.";
    }
} else {
    echo "File Upload Error";
}
}

?>