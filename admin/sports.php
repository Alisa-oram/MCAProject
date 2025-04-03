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
</style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="form-container">
          <h2 class="text-center text-primary mb-4">Add New Club</h2>
          <form action="sports.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Club Name:</label>
                  <input type="text" name="name" placeholder="Enter Club Name" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label class="form-label">Club ID:</label>
                  <input type="text" name="clubId" placeholder="Enter Club ID" class="form-control" required>
              </div>
              
              <button type="submit" name="add" class="btn btn-primary">Add</button>
          </form>
      </div>
  </div>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $clubId = $_POST['clubId'];
    require_once "admin_functions.php";
    $res = addClub($name,$clubId);
    if($res){
         header("location:sports.php");
        
    } else {
        echo " Error While Adding.";
    }
} else {
    echo "File Upload Error";
}

?>