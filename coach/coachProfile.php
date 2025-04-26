<?php
 session_start();
 $name = $_SESSION['name'];
?>
  <main class="container">
    <div class="card text-center">
    <i class="bi bi-person pic"></i>
      <div class="card-body">
        <h3 class="card-title"><?php echo $name ?></h3>
        <h5 class="card-subtitle mb-2 text-success">Respective sports coach</h5>
        <p class="card-text fst-italic">Front-end developer and avid reader.</p>
        <a href="attendance.php" class="btn btn-dark button">Attendance</a>
        <a href="#" class="btn btn-dark button">Remarks</a>
        <a href="matchTeam.php" class="btn btn-dark button">Teams</a>
      </div>
    </div>
  </main>
