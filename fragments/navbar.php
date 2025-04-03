<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/admin/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg   position-absolute w-100" style="background-color: #05427e;">
        <div class="container-fluid">
            <a class="navbar-brand text-white d-flex align-items-center" href="./index.php">
                <img src="./assets/images/image.png" alt="Logo" width=" 50" height="50" class="me-2 rounded-circle">
                My Website
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Matches</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Blogs</a></li>
                    <li class="nav-item login-hover">
                        <a class="nav-link text-white" href="#">Login</a>
                        <div class="login-popup">
                            <a href="login.php">Student</a>
                            <a href="login.php">Admin</a>
                            <a href="login.php">Coach</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

