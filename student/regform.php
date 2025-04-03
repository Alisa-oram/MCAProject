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
    <card class="card  p-4 rounded shadow w-100 mt-2 mb-4" style="max-width: 500px;">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form action="studentdb.php"  method="POST" onsubmit="validate(event)">
                <label class="form-label">Name</label>
                <input type="text" name="name" required class="form-control"><br>
                <label class="form-label">SIC</label>
                <input type="text" name="sic" required class="form-control">
                <label id="sicError" class="error"></label><br>
                <label class="form-label">Select Sports Club</label>
                <select name="sport" required class="form-select">
                    <option value="">-- Choose a Club --</option>
                    <option value="Football">Football</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Vollyball">Vollyball</option>
                    <option value="Kabadi">Kabadi</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Badminton">Badminton</option>
                </select><br>
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" required class="form-control"><br>
                <label class="form-label">Email</label>
                <input type="email" name="email" required class="form-control"><br>
                <label id="emailError" class="error"></label><br>
                <label class="form-label">Department</label>
                <select name="department" required class="form-select">
                    <option value="">-- Choose your department --</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="MCA">MCA</option>
                    <option value="MSC">MSC</option>
                </select><br>
                <label class="form-label">Year</label>
                <select name="year" required class="form-select">
                    <option value="">-- Choose your year --</option>
                    <option value="1st year">1st year</option>
                    <option value="2nd year">2nd year</option>
                    <option value="3rd year">3rd year</option>
                    <option value="4th year">4th year</option>
                </select><br>
            <button type="submit" name="submit" class="btn btn-primary w-25">Register</button>
        </form>
    </card>
    <script src="form_validation.js"></script>
    <script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
