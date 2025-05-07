
<?php
session_start();
if (!isset($_SESSION['sic'])) {
    header("Location: login.php");
    exit();
}
include_once "studentnav.php";
$name = $_SESSION['name'];
$sic = $_SESSION['sic'];
$club = $_SESSION['club_name'];
$email = $_SESSION['email'];
$department = $_SESSION['dept'];
?>


<head>

<style>
    /* Custom Styling for better card and button appearance */
    .card {
        margin-top:100px;
      border-radius: 15px;
    }
    .btn-rounded {
      border-radius: 50px;
    }
    .profile-icon {
      font-size: 180px;
      color: #6c757d;
    }
    .card-header {
      background-color: #f8f9fa;
    }
    .card-body {
      background-color: #ffffff;
    }
  </style>
</head>
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="card shadow-lg border-0 p-5" 
         style="max-width: 1100px; min-height: 500px; background: #ffffff;">

      <!-- Profile Header -->
      <div class="row align-items-center">
        <!-- Profile Icon Section -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <i class="bi bi-person-circle profile-icon"></i>
        </div>

        <!-- Student Details Section -->
        <div class="col-md-8 text-center text-md-start">
          <h1 class="fw-bold"><?php echo $name; ?></h1>
          <h4 class="text-success mb-2"><?php echo $club; ?></h4>
          <p class="text-muted fst-italic mb-1"><?php echo $email; ?></p>
          <p class="text-muted mb-3">Department: <?php echo $department; ?> | SIC: <?php echo $sic; ?></p>
          
          <p class="mb-4">
            Welcome to your sports profile! Here you can track your attendance, view remarks, and see your team and club members. Stay active and keep striving for excellence both on and off the field!
          </p>

          <!-- Action Buttons -->
          <div class="d-flex flex-wrap gap-3">
            <a href="student_attendance.php" class="btn btn-primary btn-rounded btn-lg">Attendance</a>
            <a href="student_remark.php" class="btn btn-outline-primary btn-rounded btn-lg">Remarks</a>
            <a href="student_teams.php" class="btn btn-primary btn-rounded btn-lg">Teams & Members</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

