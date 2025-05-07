<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Spring Event</title>
  <link href="./assets/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .full-height {
      min-height: 100vh;
    }

    .event-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .left-panel {
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
      gap: 2rem;
    }

    @media (min-width: 768px) {
      .left-panel {
        padding: 5rem 6rem;
        gap: 3rem;
      }
    }

    .btn-small {
      font-size: 1rem;
      padding: 0.35rem 0.9rem;
    }

    @media (max-width: 767.98px) {
      .btn-small {
        width: 100%;
        text-align: center;
      }

      .title {
        font-size: 2.5rem;
        text-align: center;
      }

      .event-date,
      .event-description {
        text-align: center;
      }

      .event-image {
        height: 250px;
      }
    }

    .title {
      font-size: 5rem;
      font-weight: 700;
      margin-bottom: 2rem;
    }

    .event-date {
      font-size: 1.25rem;
      color: black;
      margin-bottom: 1.5rem;
    }

    .event-description {
      font-size: 1rem;
      color: black;
      max-width: 100%;
      margin-top: 1rem;
    }
  </style>
</head>
<body><?php
include_once "./dbFunctions/student_function.php"; // Adjust path as needed

// Get blog ID from the URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Event ID.");
}

$EventId = $_GET['id'];

$event = getEventById($EventId);
?>
<div class="container-fluid p-0">
  <div class="row g-0 full-height flex-column flex-md-row">

    <!-- Left Side (Text Content) -->
    <div class="col-md-6 bg-light">
      <div class="left-panel">
        <div>
          <div class="title"><?php echo $event['topic']?></div>
          <div class="event-date"><?php echo $event['date']?></div>
          <div class="event-description">
          <?php echo $event['detail']?>
          </div>
          <div class="mt-4">
          <a href="event_register.php?id=<?php echo $event['id']; ?>" class="btn btn-warning btn-small">Register Now</a>
          <a href="index.php" class="btn btn-warning btn-small">Back to home</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Right Side (Image) -->
    <div class="col-md-6 p-0">
      <img src="./assets/images/match1.jpg" alt="Event Image" class="event-image">
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
