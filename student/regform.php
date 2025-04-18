<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <style>
    body{
      margin:0;
      padding:0;
      background-color: rgb(75, 88, 139);
      font-family: 'Old Baskaville';
      background-attachment: fixed;
      background-size:cover;
    }
    .card{
      background: rgba(255, 255, 255, 0.7);
      width:500px;
      color:black;
    }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 rounded shadow w-100 mt-2 mb-4" style="max-width: 500px;">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form action="../admin/studentdb.php" method="POST" onsubmit="validate(event)">
            <label class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control">
            <label id="nameError" class="error text-danger"></label><br>

            <label class="form-label">SIC</label>
            <input type="text" id="sic" name="sic" class="form-control">
            <span id="sicError" class="error text-danger"></span><br>

            <label class="form-label">Select Sports Club</label>
            <select id="sport" name="sport" class="form-select">
                <option value="">-- Choose a Club --</option>
                <option value="Football">Football</option>
                <option value="Basketball">Basketball</option>
                <option value="Cricket">Cricket</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Kabaddi">Kabaddi</option>
                <option value="Tennis">Tennis</option>
                <option value="Badminton">Badminton</option>
            </select>
            <span id="sportError" class="error text-danger"></span><br>

            <label class="form-label">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="form-control">
            <span id="dateError" class="error text-danger"></span><br>

            <label class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control">
            <span id="emailError" class="error text-danger"></span><br>

            <label class="form-label">Department</label>
            <select id="department" name="department" class="form-select">
                <option value="">-- Choose your department --</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="MCA">MCA</option>
                <option value="MSC">MSC</option>
            </select>
            <span id="deptError" class="error text-danger"></span><br>

            <label class="form-label">Year</label>
            <select id="year" name="year" class="form-select">
                <option value="">-- Choose your year --</option>
                <option value="1st year">1st year</option>
                <option value="2nd year">2nd year</option>
                <option value="3rd year">3rd year</option>
                <option value="4th year">4th year</option>
            </select>
            <span id="yearError" class="error text-danger"></span><br>

            <button type="submit" name="submit" class="btn btn-primary w-25 mt-3">Register</button>
        </form>
    </div>

    <script src="form_validation.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
