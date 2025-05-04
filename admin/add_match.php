<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Match</title>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css"> 
  <style>
      body {
          background-color: rgb(75, 88, 139);
      }
      .form-container {
          max-width: 700px;
          background: rgba(255,255,255, 0.8);
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }
      .btn-primary {
          width: 100%;
          padding: 10px;
      }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="form-container">
      <h2 class="text-center text-primary mb-4">Upload Match Details</h2>
      <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
              <label class="form-label">Team A Name:</label>
              <input type="text" name="team_a" class="form-control" placeholder="Team A" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Team A Banner:</label>
              <input type="file" name="banner_a" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Team B Name:</label>
              <input type="text" name="team_b" class="form-control" placeholder="Team B" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Team B Banner:</label>
              <input type="file" name="banner_b" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Event Name:</label>
              <input type="text" name="event" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Date:</label>
              <input type="datetime-local" name="datetime" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Venue:</label>
              <input type="text" name="venue" class="form-control" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Club:</label>
              <input type="text" name="club" class="form-control" required>
          </div>
          <button type="submit" name="upload" class="btn btn-primary">Upload Match</button>
      </form>
  </div>
</div>
<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['upload'])) {
    $team_a = $_POST['team_a'];
    $team_b = $_POST['team_b'];
    $event = $_POST['event'];
    $datetime = $_POST['datetime'];
    $venue = $_POST['venue'];
    $club = $_POST['club'];

    $imageA = $_FILES['banner_a'];
    $imageB = $_FILES['banner_b'];

    $nameA = time() . "-a-" . $imageA['name'];
    $nameB = time() . "-b-" . $imageB['name'];

    $pathA = "../uploads/" . $nameA;
    $pathB = "../uploads/" . $nameB;

    if (move_uploaded_file($imageA['tmp_name'], $pathA) && move_uploaded_file($imageB['tmp_name'], $pathB)) {
        require_once "admin_functions.php";
        $res = addMatch($team_a, $team_b, $event, $datetime, $venue, $club, $nameA, $nameB);
        if ($res) {
            echo "<script>
        alert('Match uploaded successfully!');
        window.location.href = 'add_match.php?success=1';
    </script>";
        } else {
            echo "Error saving match to database.";
        }
    } else {
        echo "File upload failed.";
    }
}
?>
