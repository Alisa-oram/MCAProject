<?php
session_start();
if (!isset($_SESSION['sic'])) {
    header("Location: login.php");
    exit();
}

$sic = $_SESSION['sic'];
$club = $_SESSION['club_name'];

// Database connection
require_once "../dbFunctions/dbconnection.php";
$conn = dbConnection();

// Fetch student's team details
$stmt = $conn->prepare("SELECT created_at, team_name, coach_email FROM match_teams WHERE club_name = ? AND student_sic = ?");
$stmt->bind_param("ss", $club, $sic);
$stmt->execute();
$teamResult = $stmt->get_result();

// Fetch all club members
$membersStmt = $conn->prepare("SELECT name, sic, email FROM club_member WHERE club_name = ?");
$membersStmt->bind_param("s", $club);
$membersStmt->execute();
$membersResult = $membersStmt->get_result();
?>


<head>
<style>
    body {
      background-color: #f1f3f5;
      display: flex;
      flex-direction: column;
      height: 100vh;
      margin: 0;
    }
    .main-content {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    .attendance-card {
      width: 100%;
      max-width: 900px; /* Adjust width as needed */
      background-color: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .table thead {
      background-color: #0d6efd;
      color: white;
    }
    .star-icon {
      color: gold;
      font-size: 1.2rem;
    }
    footer {
      text-align: center;
      padding: 10px 0;
      background-color: #0d6efd;
      color: white;
    }
</style>
</head>

<body>

<?php include_once "../fragments/navbar.php"; ?>

<div class="main-content"> 
        <div class="attendance-card"> 
            

  <h1 class="text-center mb-4">Your Teams & Club Members</h1>

  <h3>Your Team</h3>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Created At</th>
          <th>Team Name</th>
          <th>Coach Email</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($teamResult->num_rows > 0): ?>
          <?php while($row = $teamResult->fetch_assoc()): ?>
            <tr>
              <td><?php echo htmlspecialchars($row['created_at']); ?></td>
              <td><?php echo htmlspecialchars($row['team_name']); ?></td>
              <td><?php echo htmlspecialchars($row['coach_email']); ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="3" class="text-center">You are not assigned to any team yet.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
        </div>
        </div>

<?php include_once "../fragments/footer.php"; ?>

</body>

