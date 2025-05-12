<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
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
  <div class="container d-flex justify-content-center align-items-center vh-100">
  <div style="position: absolute; top: 20px; left: 20px;">
        <a href="index.php" class="btn-icon-back" title="Go Back">
            <i class="bi bi-arrow-left-circle fs-3"></i>
        </a>
    </div>
      <div class="form-container">
          <h2 class="text-center text-primary mb-4">Add Event</h2>
          <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Title:</label>
                  <input type="text" name="title" placeholder="Enter your title" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Event Date:</label>
                  <input type="date" name="date" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Upload Banner:</label>
                  <input type="file" name="image" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Description:</label>
                  <textarea name="article" class="form-control" rows="5" placeholder="Enter event details" required></textarea>
              </div>
              <div class="mb-3">
                  <label class="form-label">Event For:</label>
                  <select name="event_for" id="event_for">
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                  </select>
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
    $event_for= $_POST['event_for'];
    $new_name = time()."-".$image['name'];
    $upload_path="../uploads/".$new_name;
    if(move_uploaded_file($image['tmp_name'],$upload_path)){
    require_once "admin_functions.php";
    $res = addEvent($title,$date,$new_name,$content,$event_for);
    if($res){
        echo "<script>
    alert('Event Added Successfully!');
    window.location.href='add_event.php';
</script>";
exit();
        
    } else {
        echo " Error While Adding.";
    }
} else {
    echo "File Upload Error";
}
}

?>