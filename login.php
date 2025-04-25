<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
<body>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgb(75, 88, 139)">
    <form action="./dbFunctions/login.php" method="post" class="p-4 shadow-lg rounded w-100 h-50 text-black" 
        style="max-width: 25rem; background:rgba(255,255,255, 0.7);color: white;">
        <h2 class="text-center mb-4">Sign In</h2>
        <div class="mb-3">
          <select name="role" id="role" class="form-control text-center fw-bold">
            <option value="" selected disabled>---Login As---</option>
            <option value="admin">Admin</option>
            <option value="coach">Coach</option>
            <option value="student">Student</option>
          </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter username">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100 mt-4">Sign In</button>
    </form>

<script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html> -->




