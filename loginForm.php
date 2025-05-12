<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign In</title>
  <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      background: linear-gradient(to right,rgb(31, 25, 100), #6a82fb);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }
    .login-card {
      max-width: 900px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      background-color: #fff;
    }
    .login-card{
      background: linear-gradient(to right,rgb(120, 111, 127), #6a82fb);
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
    <a href="./index.php" class="btn-icon-back" title="Go Back">
        <i class="bi bi-arrow-left-circle fs-3"></i>
    </a>
</div>
  <div class="login-card row w-100">
    <!-- Image Side -->
    <div class="col-md-6 login-image d-none d-md-block">
      <!-- Add your Image -->
      <img src="./assets/images/match1.jpg" alt="Login Image" class="img-fluid h-75 w-75 mt-5 ms-5 mx-auto"/>
    </div>

    <!-- Form Side -->
    <div class="col-md-6 form-side d-flex align-items-center p-4">
    <form action="./dbFunctions/login.php" method="post" class="w-100">
  <h2 class="mb-4 text-center">Sign In</h2>

  <div class="mb-3">
    <select name="role" id="role" class="form-control text-center fw-bold">
      <option value="" selected disabled>--- Login As ---</option>
      <option value="admin">Admin</option>
      <option value="coach">Coach</option>
      <option value="student">Student</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
      <input type="text" name="username" class="form-control" placeholder="Enter email or username" />
    </div>
  </div>

  <div class="mb-1">
    <label class="form-label">Password</label>
    <div class="input-group">
      <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
      <input type="password" name="password" class="form-control" placeholder="Enter password" />
    </div>
  </div>

  <!-- Forgot Password Link -->
  <div class="mb-3 text-start mt-2">
    <a href="forgot_password.php" class="text-dark text-decoration-none">Forgot Password?</a>
  </div>

  <button type="submit" name="submit" class="btn btn-primary w-100 mt-2">Sign In</button>
</form>

    </div>
  </div>

  <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
