<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/admin/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .navbar{
            z-index: 999 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg position-fixed top-0 start-0 w-100" style="background-color: #05427e;">
        <div class="container-fluid">
            <a class="navbar-brand text-white d-flex align-items-center" href="./index.php">
                <img src="./assets/images/image.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
                <span class="name" style="font-family:'Georgia', Serif;font-size: 24px;">SILICON SPORT</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="./index.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="./matchPage.php">Matches</a></li>
                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="#">Blogs</a></li>

                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="./match.php">Matches</a></li>
                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="./blog.php">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link text-white mx-3" style="font-family: 'Georgia', Serif; font-size: 18px;" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    


