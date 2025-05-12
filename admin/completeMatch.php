<?php
require_once "admin_functions.php";
$conn = dbConnection();

if (!isset($_GET['id'])) {
    die("Match ID is required in the URL (e.g., complete_match.php?id=1)");
}

$match_id = $_GET['id'];

// Fetch match details
$stmt = $conn->prepare("SELECT * FROM matches WHERE id = ?");
$stmt->bind_param("i", $match_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    die("Match not found.");
}
$match = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Complete Match</title>
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
  <style>
    body { background-color: #4b588b; }
    .form-container {
        max-width: 700px;
        background: rgba(255,255,255, 0.95);
        padding: 30px;
        border-radius: 10px;
        margin-top: 50px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
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
            color: black; 
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }
  </style>
</head>
<body>
<div style="position: absolute; top: 20px; left: 20px;">
    <a href="matches.php" class="btn-icon-back" title="Go Back">
        <i class="bi bi-arrow-left-circle fs-3"></i>
    </a>
</div>

<div class="container">
  <div class="form-container mx-auto">
    <h3 class="text-center text-primary">Mark Match as Completed</h3>

    <p><strong>Event:</strong> <?= $match['event_name'] ?></p>
    <p><strong>Teams:</strong> <?= $match['team_a'] ?> vs <?= $match['team_b'] ?></p>
    <p><strong>Date:</strong> <?= date("d M Y, H:i", strtotime($match['match_datetime'])) ?></p>
    <p><strong>Venue:</strong> <?= $match['venue'] ?></p>

    <form method="post">
        <input type="hidden" name="match_id" value="<?= $match['id'] ?>">

        <div class="mb-3">
            <label><?= $match['team_a'] ?> Score:</label>
            <input type="text" name="score_a" class="form-control" required min="0">
        </div>

        <div class="mb-3">
            <label><?= $match['team_b'] ?> Score:</label>
            <input type="text" name="score_b" class="form-control" required min="0">
        </div>

        <div class="mb-3">
            <label>Result Message:</label>
            <textarea name="msg" class="form-control" placeholder="Enter match summary..." required></textarea>
        </div>

        <button type="submit" name="complete" class="btn btn-success w-100">Complete Match</button>
    </form>
  </div>
</div>

</body>
</html>

<?php
if (isset($_POST['complete'])) {
    $msg = $_POST['msg'];
    $scoreA = (int)$_POST['score_a'];
    $scoreB = (int)$_POST['score_b'];

    // Insert into completedMatches
    $ins = $conn->prepare("INSERT INTO completedMatches 
        (event_name, venue, match_datetime, team_a, team_b, score_a, score_b, msg)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $ins->bind_param("sssssiis", 
        $match['event_name'], 
        $match['venue'], 
        $match['match_datetime'], 
        $match['team_a'], 
        $match['team_b'], 
        $scoreA, 
        $scoreB, 
        $msg
    );
    
    if ($ins->execute()) {
        // Delete from matches
        $del = $conn->prepare("DELETE FROM matches WHERE id = ?");
        $del->bind_param("i", $match_id);
        $del->execute();

        echo "<script>alert('Match completed and recorded successfully!'); window.location.href='matches.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
