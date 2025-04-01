<?php include_once "./fragments/navbar.php"?>

  <!-- Login Card -->
  <section class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 22rem;">
      <h2 class="text-center text-primary mb-4">Sign In</h2>
      <form action="" method="post">
          <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-100">Sign In</button>
      </form>
    </div>
  </section>

<?php include_once "./fragments/footer.php"?>