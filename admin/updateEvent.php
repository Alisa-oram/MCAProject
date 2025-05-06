<?php
require_once "../dbFunctions/dbconnection.php";
session_start();

if (isset($_GET['id'])) {
    $conn = dbConnection();
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM event WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $article = $_POST['article'];
        $event_for = $_POST['event_for'];
        
        // Check if image is uploaded
        if ($_FILES['image']['name']) {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $target = "../uploads/" . basename($image);
            move_uploaded_file($tmp_name, $target);
    
            // With image update
            $stmt = $conn->prepare("UPDATE event SET topic=?, date=?, image=?, detail=?, event_for=? WHERE id=?");
            $stmt->bind_param("sssssi", $title, $date, $image, $article, $event_for, $id);
        } else {
            // Without image update
            $stmt = $conn->prepare("UPDATE event SET topic=?, date=?, detail=?, event_for=? WHERE id=?");
            $stmt->bind_param("ssssi", $title, $date, $article, $event_for, $id);
        }
    
        if ($stmt->execute()) {
            echo "<script>
                    alert('Event updated successfully!');
                    window.location.href='allEvent.php';
                  </script>";
        } else {
            echo "<script>alert('Update failed');</script>";
        }
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Event</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <style>
        body {
            background-color: #4b588b;
        }
        .form-container {
            max-width: 700px;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 10px;
            margin-top: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container mx-auto">
        <h2 class="text-center text-primary mb-4">Update Event</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $event['topic']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Date:</label>
                <input type="date" name="date" class="form-control" value="<?php echo $event['date']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload New Banner (optional):</label>
                <input type="file" name="image" class="form-control">
                <small class="text-muted">Current: <?php echo basename($event['image']); ?></small>
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea name="article" class="form-control" rows="5" required><?php echo $event['detail']; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Event For:</label>
                <select name="event_for" class="form-control">
                    <option value="student" <?php if($event['event_for'] == 'student') echo 'selected'; ?>>Student</option>
                    <option value="faculty" <?php if($event['event_for'] == 'faculty') echo 'selected'; ?>>Faculty</option>
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary w-100">Update</button>
        </form>
    </div>
</div>
</body>


</html>
