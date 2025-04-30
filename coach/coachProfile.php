<?php
 session_start();
 $name = $_SESSION['name'];
 $club = $_SESSION['club'];
 $email = $_SESSION['email'];
?>
  <main class="container my-5">
  <div class="row justify-content-center">
    <div class="card shadow-lg border-0 p-5" 
         style="max-width: 1100px; min-height: 500px; border-radius: 20px; background: #ffffff;">
      
      <div class="row align-items-center">
        
        <!-- Profile Image Section -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <i class="bi bi-person-circle" 
             style="font-size: 180px; color: #6c757d;"></i>
          <!-- Use an <img> if you have a real profile picture -->
        </div>

        <!-- Info Section -->
        <div class="col-md-8 text-center text-md-start">
          <h1 class="fw-bold"><?php echo $name; ?></h1>
          <h4 class="text-success mb-3"><?php echo $club; ?></h4>
          <p class="fst-italic text-muted"><?php echo $email; ?></p>
          <p>About Coach Passionate about sports and dedicated to nurturing talent, <?php echo $name; ?> is a committed coach for the <?php echo $club; ?> team. With a deep understanding of the game and years of experience, <?php echo $name; ?> focuses on building skills, teamwork, and confidence among players. Always encouraging and motivating, <?php echo $name; ?> believes in bringing out the best in every athlete both on and off the field.</p>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="attendance.php" class="btn btn-primary rounded-pill btn-lg">Attendance</a>
            <a href="remarks.php" class="btn btn-outline-primary rounded-pill btn-lg">Remarks</a>
            <a href="matchTeam.php" class="btn btn-primary rounded-pill btn-lg">Teams</a>
          </div>
        </div>

      </div>

    </div>
  </div>
</main>



