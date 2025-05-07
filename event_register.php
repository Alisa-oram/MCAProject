<?php
// Include the necessary database connection and function
include_once "dbFunctions/student_function.php"; // Include the function to fetch event details

// Check if the event ID is passed in the URL and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $eventId = $_GET['id'];
    $event = getEventById($eventId); // Fetch the event details

    if ($event) {
        // If event is found, populate event name
        $eventName = $event['topic']; // Assuming 'topic' is the event name in the database
    } else {
        // If no event found, set a default message
        $eventName = "Event not found";
    }
} else {
    // If no ID is passed, set a default message
    $eventName = "Invalid event ID";
}
?>
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
                <input type="text" name="event_name" class="form-control" value="<?php echo $eventName ?>" required>
            </div>
            <!-- Hidden input to pass the event ID for submission -->
            <input type="hidden" name="event_id" value="<?php echo $eventId; ?>">

            <button type="submit" class="btn btn-primary">Submit Participation</button>
        </form>
    </div>
    <script src="./assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
