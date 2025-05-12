<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Roles</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <style>
        body {
        background-color: rgb(75, 88, 139);
    }
    .form-container {
        width: 500px;
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
            <h2 class="text-center text-primary mb-4">Appoint Roles</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">User Name:</label>
                    <input type="text" placeholder="Enter user name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Role of User:</label>
                    <select name="role" class="form-control" required>
                        <option value="">--Select--</option>
                        <option value="coach">Coach</option>
                        <option value="secretary">Secretary</option>
                    </select>
                </div>
                <div class="mb-3">
                <label class="form-label">Select Sports Club</label>
<select id="sport" name="club" class="form-select">
    <option value="">-- Choose a Club --</option>
    <?php
    require_once __DIR__ . '/../dbFunctions/dbconnection.php';
    $conn = dbConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT clubName FROM sports_club";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row["clubName"]) . "'>" . htmlspecialchars($row["clubName"]) . "</option>";
        }
    } else {
        echo "<option disabled>No clubs found</option>";
    }

    $conn->close();
    ?>
</select>
<span id="sportError" class="error text-danger"></span><br>

                </div>
                <div class="mb-3">
                    <label class="form-label">Email ID:</label>
                    <input type="email" placeholder="Enter email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" placeholder="Enter password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" name="upload" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
require_once "../phpmailer/test.php";

if(isset($_POST['upload'])){
   $name = $_POST['name'];
   $role = $_POST['role'];
   $club = $_POST['club'];
   // $userid = $_POST['userid'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   require_once "admin_functions.php";
   $res = addRole($name,$role,$club,$password,$email);
   if($res){
      //send mail to coach
      sendMail($email ,"Added to club","Dear ma'am/sir,I hope this mail finds you well.We are inform you that you were added to the club ".$club." you can log in  through your email Id and Password :".$password);
      echo "<script>alert('Role Appointed!'); window.location.href='add_role.php';</script>";
   } else {
       echo " Error While Adding.";
   }
} else {
   echo "File Upload Error";
}
?>