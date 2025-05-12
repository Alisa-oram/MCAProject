<?php
session_start();
require_once "./dbFunctions/dbconnection.php";

$message = "";

if (isset($_POST['reset'])) {
    $conn = dbConnection();
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        $message = "Passwords do not match!";
    } else {
        // Determine which user table contains the email
        $userTables = ['admin', 'coach', 'club_member'];
        $userFound = false;

        foreach ($userTables as $table) {
            $check = $conn->prepare("SELECT * FROM $table WHERE email = ?");
            $check->bind_param("s", $email);
            $check->execute();
            $result = $check->get_result();

            if ($result->num_rows > 0) {
                $userFound = true;
                $stmt = $conn->prepare("UPDATE $table SET password = ? WHERE email = ?");
                $stmt->bind_param("ss", $newPassword, $email);
                $stmt->execute();
                $message = "Password updated successfully for $table user!";
                break;
            }
        }

        if (!$userFound) {
            $message = "Email not found in any user table!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Forgot Password</title>
  <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
  <style>
    body {
      background: linear-gradient(to right, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      width: 400px;
      padding: 30px;
      border-radius: 10px;
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
            color:rgb(8, 12, 19);
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }
  </style>
</head>
<body>
  <div style="position: absolute; top: 20px; left: 20px;">
    <a href="./loginForm.php" class="btn-icon-back" title="Go Back">
        <i class="bi bi-arrow-left-circle fs-3"></i>
    </a>
</div>
  <div class="card shadow-lg bg-light">
    <h3 class="text-center mb-4">Reset Password</h3>
    <?php if ($message): ?>
      <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" required class="form-control" placeholder="Enter your registered email">
      </div>
      <div class="mb-3">
        <label>New Password</label>
        <input type="password" name="new_password" required class="form-control" placeholder="New Password">
      </div>
      <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required class="form-control" placeholder="Confirm Password">
      </div>
      <button type="submit" name="reset" class="btn btn-primary w-100">Reset Password</button>
    </form>
  </div>
</body>
</html>
