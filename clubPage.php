<head>
    <style>
        .Div1{
            position: relative;
             width: 100%;
              height: 750px;
            }
        .foot{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 60px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
         }
         .card-row {
           display: flex;
           flex-wrap: wrap;
           gap: 0; /* no gap between cards */
          }
          .card-col {
            flex: 0 0 20%; /* 100% / 5 cards = 20% */
            padding: 0;
            }
</style>
</head>


<?php
include_once "./fragments/navbar.php";
require_once "./dbFunctions/dbconnection.php";

$conn = dbConnection();
if (!$conn || $conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

$clubId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($clubId <= 0) {
    die("Invalid or missing club ID.");
}

$sql = "SELECT clubName, image FROM sports_club WHERE clubId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $clubId);
$stmt->execute();
$result = $stmt->get_result();
$club = $result->fetch_assoc();

if (!$club) {
    die("Club not found.");
}
?>

<div class="Div1">
  <img src="./uploads/<?= htmlspecialchars($club['image']) ?>" alt="Club" style="width: 100%; height: 100%; object-fit: cover;">
  <div class="foot"><?= htmlspecialchars($club['clubName']) ?> Club</div>
</div>
<div class="container">
  <div class="row g-4"> <!-- Add Bootstrap gutter class here -->
    
    <!-- Coach Column -->
    <div class="col-md-6">
      <h5 class="mb-2 text-center text-black fw-bold fs-3">Coach</h5>
      <div class="card shadow-sm border-0 h-100" style="min-height: 200px;">
        <div class="row g-0 h-100">
          <div class="col-md-5 h-100">
            <img src="./assets/images/coach.jpg" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Coach Image">
          </div>
          <div class="col-md-7 bg-primary text-light px-3 py-2 rounded-end d-flex flex-column justify-content-center h-100">
            <small style="font-size: 1rem;">Coach Profile</small>
            <h6 class="mt-1 mb-1">Coach John Doe</h6>
            <p class="mb-1" style="font-size: 1rem;"><strong>Phone:</strong> +1 (234) 567-890</p>
            <p style="font-size: 1rem;">15+ years in coaching, focused on growth and leadership.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Secretary Column -->
    <div class="col-md-6">
      <h5 class="mb-2 text-center text-black fw-bold fs-3">Secretary</h5>
      <div class="card shadow-sm border-0 h-100" style="min-height: 200px;">
        <div class="row g-0 h-100">
          <div class="col-md-5 h-100">
            <img src="./assets/images/secretary.jpg" class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Secretary Image">
          </div>
          <div class="col-md-7 bg-primary text-light px-3 py-2 rounded-end d-flex flex-column justify-content-center h-100">
            <small style="font-size: 1rem;">Secretary Profile</small>
            <h6 class="mt-1 mb-1">Secretary Jane Smith</h6>
            <p class="mb-1" style="font-size: 1rem;"><strong>Email:</strong> jane@example.com</p>
            <p style="font-size: 1rem;">Manages communication and team coordination.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="text-center py-10">
    <h2 class="text-3xl font-bold text-indigo-700" style=" margin-top: 100px;">Our Club Members</h2>
</div>
<div class="container mt-4">
  <div class="table-responsive w-100 mx-auto"> <!-- Centers the table -->
    <table class="table table-bordered table-striped text-center">
      <thead class="table-primary" style="background-color: blue;">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Year</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>Computer Science</td>
          <td>3rd Year</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>Electrical Engineering</td>
          <td>2nd Year</td>
        </tr>
        <tr>
          <td>Mike Johnson</td>
          <td>Mechanical</td>
          <td>Final Year</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>






<?php
include_once "./fragments/footer.php";
?>

 



