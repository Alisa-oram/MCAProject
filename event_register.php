<!DOCTYPE html>
<html>
<head>
    <title>Event Participation Form</title>
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Event Participation Form</h2>
        <form action="submit_participation.php" method="POST">
            <div class="form-group">
                <label>Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Role:</label>
                <select name="role" class="form-control" required>
                    <option value="">Select Role</option>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                </select>
            </div>

            <div class="form-group">
                <label>Department:</label>
                <input type="text" name="department" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Event Name:</label>
                <input type="text" name="event_name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit Participation</button>
        </form>
    </div>
    <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
