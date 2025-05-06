<?php
require_once "admin_functions.php";
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid match ID.");
}

$conn = dbConnection();
$qry = "SELECT * FROM matches WHERE id = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$match = $result->fetch_assoc();

if (!$match) {
    die("Match not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Match</title>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <style>
    body { background-color: rgb(75, 88, 139); }
    .form-container {
        max-width: 700px;
        background: rgba(255,255,255, 0.9);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="form-container">
      <h2 class="text-center text-primary mb-4">Edit Match Details</h2>
      <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
              <label class="form-label">Team A Name:</label>
              <input type="text" name="team_a" class="form-control" value="<?= $match['team_a'] ?>" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Team A Banner: (Leave blank to keep existing)</label>
              <input type="file" name="banner_a" class="form-control">
              <small>Current: <?= $match['banner_a'] ?></small>
          </div>
          <div class="mb-3">
              <label class="form-label">Team B Name:</label>
              <input type="text" name="team_b" class="form-control" value="<?= $match['team_b'] ?>" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Team B Banner: (Leave blank to keep existing)</label>
              <input type="file" name="banner_b" class="form-control">
              <small>Current: <?= $match['banner_b'] ?></small>
          </div>
          <div class="mb-3">
              <label class="form-label">Event Name:</label>
              <input type="text" name="event" class="form-control" value="<?= $match['event_name'] ?>" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Date & Time:</label>
              <input type="datetime-local" name="datetime" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($match['match_datetime'])) ?>" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Venue:</label>
              <input type="text" name="venue" class="form-control" value="<?= $match['venue'] ?>" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Club:</label>
              <input type="text" name="club" class="form-control" value="<?= $match['club'] ?>" required>
          </div>
          <button type="submit" name="update" class="btn btn-primary">Update Match</button>
      </form>
  </div>
</div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $team_a = $_POST['team_a'];
    $team_b = $_POST['team_b'];
    $event = $_POST['event'];
    $datetime = $_POST['datetime'];
    $venue = $_POST['venue'];
    $club = $_POST['club'];

    // Initialize with existing banners
    $banner_a = $match['banner_a'];
    $banner_b = $match['banner_b'];

    // Handle new uploads if provided
    if (!empty($_FILES['banner_a']['name'])) {
        $newNameA = time() . "-a-" . $_FILES['banner_a']['name'];
        $pathA = "../uploads/" . $newNameA;
        if (move_uploaded_file($_FILES['banner_a']['tmp_name'], $pathA)) {
            $banner_a = $newNameA;
        }
    }

    if (!empty($_FILES['banner_b']['name'])) {
        $newNameB = time() . "-b-" . $_FILES['banner_b']['name'];
        $pathB = "../uploads/" . $newNameB;
        if (move_uploaded_file($_FILES['banner_b']['tmp_name'], $pathB)) {
            $banner_b = $newNameB;
        }
    }

    $updateQry = "UPDATE matches SET team_a=?, team_b=?, event_name=?, match_datetime=?, venue=?, club=?, banner_a=?, banner_b=? WHERE id=?";
    $stmt = $conn->prepare($updateQry);
    $stmt->bind_param("ssssssssi", $team_a, $team_b, $event, $datetime, $venue, $club, $banner_a, $banner_b, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Match updated successfully!'); window.location.href='matches.php';</script>";
    } else {
        echo "Error updating match: " . $conn->error;
    }
}
?>
