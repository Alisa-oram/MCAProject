<?php
// Include the necessary database connection and function
include_once "dbFunctions/student_function.php"; // Include the function to fetch event details

// Check if the event ID is passed in the URL and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $eventId = $_GET['id'];
    $event = getEventById($eventId); // Fetch the event details

    if ($event) {
        $eventName = $event['topic']; // Assuming 'topic' is the event name in the database
    } else {
        $eventName = "Event not found";
    }
} else {
    $eventName = "Invalid event ID";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participation Form</title>
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: rgb(75, 88, 139);
        }
        .form-container {
            max-width: 700px;
            background: rgba(255,255,255, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
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
            color:rgb(11, 14, 18) ; 
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }
        
    </style>
</head>
<body>
<div style="position: absolute; top: 20px; left: 20px;">
    <a href="event.php?id=<?php echo urlencode($eventId); ?>" class="btn-icon-back" title="Go Back">
        <i class="bi bi-arrow-left-circle fs-3"></i>
    </a>
</div>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
        <h2 class="text-center text-primary mb-4">Event Participation Form</h2>
        <form action="submit_participation.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role:</label>
                <select name="role" class="form-select" required>
                    <option value="">Select Role</option>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Department:</label>
                <input type="text" name="department" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Event Name:</label>
                <input type="text" name="event_name" class="form-control" value="<?php echo $eventName ?>" readonly required>
            </div>

            <input type="hidden" name="event_id" value="<?php echo $eventId; ?>">

            <button type="submit" class="btn btn-primary">Submit Participation</button>
        </form>
    </div>
</div>
<script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
