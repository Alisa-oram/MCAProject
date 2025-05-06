<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Spring Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
<body>

<div class="container-fluid p-0">
  <div class="row g-0 full-height flex-column flex-md-row">

    <!-- Left Side (Text Content) -->
    <div class="col-md-6 bg-light">
      <div class="left-panel">
        <div>
          <div class="title">Spring Event</div>
          <div class="event-date">March 17th, 2025</div>
          <div class="event-description">
            Celebrate the arrival of spring in style! Join us in a beautifully curated garden space bursting with color, music, and joy. Enjoy handcrafted food, artisanal drinks, interactive art displays, and live performances. Whether you're coming with family, friends, or flying solo — this is the perfect way to welcome the warmer days. Don’t miss this one-of-a-kind seasonal experience!
          </div>
          <div class="mt-4">
            <button class="btn btn-warning btn-small">Register Now</button>
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
