<?php
include_once "../dbFunctions/student_function.php"; // Adjust path as needed

// Get blog ID from the URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid blog ID.");
}

$blogId = $_GET['id'];
// $conn = dbConnection(); // your function to connect DB
// $sql = "SELECT * FROM blog WHERE id = $blogId";
// $result = mysqli_query($conn, $sql);

// if (!$result || mysqli_num_rows($result) === 0) {
//     die("Blog post not found.");
// }

// Fetch the blog post
$blog = getBlogById($blogId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($blog['title']); ?></title>
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
      font-size: 4rem;
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
      white-space: pre-wrap;
    }
  </style>
</head>
<body>

<div class="container-fluid p-0">
  <div class="row g-0 full-height flex-column flex-md-row">

    <!-- Left Side (Blog Content) -->
    <div class="col-md-6 bg-light">
      <div class="left-panel">
        <div>
          <div class="title"><?php echo htmlspecialchars($blog['title']); ?></div>
          <div class="event-date">
            <?php echo date('F d, Y', strtotime($blog['date'])); ?>
          </div>
          <div class="event-description">
            <?php echo nl2br(htmlspecialchars($blog['detail'])); ?>
          </div>
          <div class="mt-4">
            <a href="../blog.php" class="btn btn-warning btn-small">Back to Blogs</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side (Image) -->
    <div class="col-md-6 p-0">
      <img src="../uploads/<?php echo htmlspecialchars($blog['image']); ?>" alt="Blog Image" class="event-image">
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></
