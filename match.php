<head>
    <style>
        .Division{
            position: relative;
             width: 100%;
              height: 750px;
            }
        .match{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 60px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
         }
         .highlight-bar {
          background-color:rgb(15, 78, 145);
          color: white;
          padding: 12px 20px;
          /* border-top-left-radius: 0.375rem; */
          /* border-top-right-radius: 0.375rem; */
          font-size: 1.25rem;
        }

    .match-box {
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      overflow: hidden; /* Keeps corners nicely rounded */
    }

    .vs-badge {
      font-size: 1.5rem;
      font-weight: bold;
      color: #dc3545;
    }
    .team-logo{
      height:200px;
      width: 200px;
      object-fit: cover;
      border-radius: 100%;

    }
    .match-info {
      line-height: 1.2;
    }
    .match-card {
      background-color:rgb(151, 165, 203);
      border: 1px solid #fc3158; /* Added Border */
      border-radius: 15px;
      padding: 30px 20px;
      text-align: center;
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }
    .match-card img {
      max-width: 80px;
    }

    
    </style>
</head>

<?php 
include_once "./fragments/navbar.php";
?>
<div class="Division">
  <img src="./assets/images/match1.jpg" alt="Football Club" style="width: 100%; height: 100%; object-fit: cover;">
  <div class="match">Matches</div>
</div>
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-11 col-lg-10">
      <div class="match-box">
        <div class="highlight-bar fw-bold">Next Match</div>

        <div class="p-5 text-center">
          <div class="row align-items-center justify-content-center mb-4">
            <div class="col-4">
              <img src="./assets/images/logo2.png" class="team-logo mb-3" alt="APEX SMASHERS Logo">
              <h4 class="fw-bold mb-0">APEX SMASHERS</h4>
            </div>
            <div class="col-4 d-flex flex-column align-items-center">
              <span class="vs-badge">VS</span>
              <div class="match-info mt-2">
                <h6 class="text-danger fw-bold mb-1">Chakravyuh 2025</h6>
                <p class="text-secondary mb-0">April 30th, 2025</p>
                <p class="text-secondary mb-0">Time - 3:45 PM</p>
                <p class="text-danger mb-0">Sundeck Sport Complex</p>
                <p class="text-danger">Silicon Cricket Club</p>
              </div>
            </div>
            <div class="col-4">
              <img src="./assets/images/logo1.png" class="team-logo mb-3" alt="TURBO TITANS Logo">
              <h4 class="fw-bold mb-0">TURBO TITANS</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="container py-5">
  <div class="section-title mb-5 fs-1 fw-bold text-center">Upcoming Matches</div>
  <div class="row g-4">
    <!-- Match 1 -->
    <div class="col-md-6">
      <div class="match-card bg-light p-4 border rounded-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-center mb-4">
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Football League</div>
          </div>
          <div class="mx-4 d-flex align-items-center">
            <span class="vs-badge text-uppercase fw-bold px-3 py-1 bg-dark text-white rounded">VS</span>
          </div>
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Soccer</div>
          </div>
        </div>
        <div class="text-center">
          <div class="text-danger mb-1 fw-bold">Silicon Cup League</div>
          <p class="mb-0 fw-bold">December 20th, 2025</p>
          <p class="mb-2 fw-bold">9:30 AM</p>
          <div class="text-danger fw-bold">Sundeck Sport Complex</div>
        </div>
      </div>
    </div>

    <!-- Match 2 -->
    <div class="col-md-6">
      <div class="match-card bg-light p-4 border rounded-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-center mb-4">
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Team Alpha</div>
          </div>
          <div class="mx-4 d-flex align-items-center">
            <span class="vs-badge text-uppercase fw-bold px-3 py-1 bg-dark text-white rounded">VS</span>
          </div>
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Team Beta</div>
          </div>
        </div>
        <div class="text-center">
          <div class="text-danger mb-1 fw-bold">Champions League</div>
          <p class="mb-0 fw-bold">December 22nd, 2020</p>
          <p class="mb-2 fw-bold">11:00 AM GMT+0</p>
          <div class="text-danger fw-bold">Global Stadium</div>
        </div>
      </div>
    </div>

    <!-- Match 3 -->
    <div class="col-md-6">
      <div class="match-card bg-light p-4 border rounded-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-center mb-4">
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Legends United</div>
          </div>
          <div class="mx-4 d-flex align-items-center">
            <span class="vs-badge text-uppercase fw-bold px-3 py-1 bg-dark text-white rounded">VS</span>
          </div>
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Victory FC</div>
          </div>
        </div>
        <div class="text-center">
          <div class="text-danger mb-1 fw-bold">Legends Cup</div>
          <p class="mb-0 fw-bold">December 25th, 2020</p>
          <p class="mb-2 fw-bold">6:00 PM GMT+0</p>
          <div class="text-danger fw-bold">Legacy Arena</div>
        </div>
      </div>
    </div>

    <!-- Match 4 -->
    <div class="col-md-6">
      <div class="match-card bg-light p-4 border rounded-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-center mb-4">
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Stormbreakers</div>
          </div>
          <div class="mx-4 d-flex align-items-center">
            <span class="vs-badge text-uppercase fw-bold px-3 py-1 bg-dark text-white rounded">VS</span>
          </div>
          <div class="text-center mx-4">
            <img src="./assets/images/logo2.png" alt="Team Logo" class="rounded-circle border border-3 border-dark" height="100">
            <div class="mt-2 fs-5 fw-bold">Thundercats</div>
          </div>
        </div>
        <div class="text-center">
          <div class="text-danger mb-1 fw-bold">Elite Series</div>
          <p class="mb-0 fw-bold">December 28th, 2020</p>
          <p class="mb-2 fw-bold">3:00 PM GMT+0</p>
          <div class="text-danger fw-bold">Stormfield</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- past matchs -->
<div class="container py-4">
  <h4 class="mb-4 fw-bold text-dark text-center fs-1">Completed Matches</h4>

  <div class="row g-4">
    <!-- Cricket Match Card -->
    <div class="col-md-4">
      <div class="card shadow-sm rounded-4 h-100">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted fst-italic">Chakravyuh Premier League - Cricket</h6>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <small class="text-muted">
              Silicon Sports Ground, Bhubaneswar, 22-Apr-25, 10 Over,<br> <strong>FINAL</strong>
            </small>
          </div>
          <div class="border-top pt-3 pb-2">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div class="fw-bold text-success">Storm Breakers</div>
              <div class="fw-bold text-success">139/3 <small class="text-muted">(10.0)</small></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="fw-semibold text-dark">Turbo Titans</div>
              <div class="fw-semibold text-dark">122/4 <small class="text-muted">(10.0)</small></div>
            </div>
          </div>
          <div class="border-top pt-3">
            <p class="mb-0">
              <strong class="text-dark">Storm Breakers</strong> won by <strong>17 runs</strong>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Football Match Card -->
    <div class="col-md-4">
      <div class="card shadow-sm rounded-4 h-100">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted fst-italic">Inter College Football Cup</h6>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <small class="text-muted">
              Silicon Turf, Bhubaneswar, 21-Apr-25, 90 min,<br> <strong>FINAL</strong>
            </small>
          </div>
          <div class="border-top pt-3 pb-2">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div class="fw-bold text-success">Blazing Boots</div>
              <div class="fw-bold text-success">3</div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="fw-semibold text-dark">Iron Kickers</div>
              <div class="fw-semibold text-dark">1</div>
            </div>
          </div>
          <div class="border-top pt-3">
            <p class="mb-0">
              <strong class="text-dark">Blazing Boots</strong> won by <strong>2 goals</strong>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Basketball Match Card -->
    <div class="col-md-4">
      <div class="card shadow-sm rounded-4 h-100">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted fst-italic">Campus Hoops Championship</h6>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <small class="text-muted">
              Silicon Indoor Arena, Bhubaneswar, 20-Apr-25,<br> <strong>SEMI FINAL</strong>
            </small>
          </div>
          <div class="border-top pt-3 pb-2">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div class="fw-bold text-success">Dunk Masters</div>
              <div class="fw-bold text-success">78</div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="fw-semibold text-dark">Net Warriors</div>
              <div class="fw-semibold text-dark">65</div>
            </div>
          </div>
          <div class="border-top pt-3">
            <p class="mb-0">
              <strong class="text-dark">Dunk Masters</strong> won by <strong>13 points</strong>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
include_once "./fragments/footer.php";
?>