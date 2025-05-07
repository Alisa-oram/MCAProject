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
    .main-content {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      width: 100%;
    }
    .btn-icon-back {
            display: inline-block;
            margin: 15px 25px;
            font-size: 1.8rem;
            color: transparent; 
            background-color: transparent;
            border: none;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        .btn-icon-back i {
            color: transparent; 
            transition: color 0.3s ease;
        }

        .btn-icon-back:hover i {
            color: #0d6efd; 
        }
   
</style>
</head>

<body>

<?php include_once "studentnav.php"; ?>
<a href="myAccount.php" class="btn-icon-back" title="Go Back" style="margin-top:80px">
        <i class="bi bi-arrow-left-circle"></i>
    </a>
    <h1 class="text-center mb-4">Your Teams </h1>
    <div class="main-content"> 
        <!-- <div class="attendance-card">  -->
          <div class="table-responsive w-75" style="margin-bottom:400px;">
            <table class="table table-bordered">
              <thead class="table-primary">
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

</body>

