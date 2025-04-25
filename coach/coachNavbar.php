<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/dashboard.css">
    <link rel="stylesheet" href="../assets/css/coach/coachProfile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="navbar w-100 z-1 position-fixed">
    <div class="nav w-100 d-flex justify-content-between px-3 py-2">
        <div class="logo ms-3">
            <a href="../index.php">
                <img src="../assets/images/image.png" class="rounded-circle" style="width: 50px; height:50px;">
                <span class="name me-2" style="font-family:'Georgia', Serif;font-size: 24px;color:white">SILICON SPORT</span>
            </a>
        </div>
        <div class="icon fs-3 text-white">
        
            <i class="bi bi-person-circle "></i>
        </div>
    </div>
</div>
<div class="row">
    <nav class="col-md-2 d-none d-md-block sidebar position-fixed vh-100" style="background-color: #05427e;margin-top:4.6rem">
        <div class="position-sticky"><hr>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="./index.php">Dashboard</a></li>
                <hr> <!-- Line after Dashboard -->
                <li class="nav-item"><a class="nav-link" href="AllCoach.php">Coach</a></li>
                <hr> <!-- Line after Blog -->
                <li class="nav-item"><a class="nav-link" href="view_attendance.php">View Attendance</a></li>
                <hr> <!-- Line after Event -->
                <li class="nav-item"><a class="nav-link" href="./sports.php">Sports</a></li><hr>
                <li class="nav-item"><a class="nav-link" href="#">Match</a></li><hr>
            </ul>
        </div>
    </nav>
</div>
