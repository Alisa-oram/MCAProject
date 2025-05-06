<head>
    <style>
        body {
      background-color: #1f2937; /* dark background */
      color: black;
    }
        .Pageblog{
            position: relative;
             width: 100%;
              height: 750px;
            }
        .Blog{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 60px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
         }
         
    .card {
      background-color: #1f2937;
      border: none;
    }
    .card-title, .card-text, .card-date {
      color:rgb(11, 11, 12);
    }
    .read-more {
      color: #ef4444;
      text-decoration: none;
    }
    .read-more:hover {
      text-decoration: underline;
    }
    </style>
</head>
<?php 
include_once "./fragments/navbar.php";
include_once "./dbFunctions/student_function.php"; // include your blog-fetching function

$blogs = showBlog(); // or use showBlog() if it fetches all blogs
?>

<div class="Pageblog">
  <img src="./assets/images/blog.jpg" alt="Football Club" style="width: 100%; height: 100%; object-fit: cover;">
  <div class="Blog">Blogs Posts</div>
</div>

<div class="container py-5">
  <h1 class="text-center mb-4">All Blogs</h1>
  <div class="row g-4 justify-content-center">

    <?php if (!empty($blogs)): ?>
      <?php foreach ($blogs as $blog): ?>
        <div class="col-md-4 col-lg-3 d-flex">
          <div class="card d-flex flex-column w-100">
            <img src="./uploads/<?php echo htmlspecialchars($blog['image']); ?>" class="card-img-top" alt="Blog image">
            <div class="card-body d-flex flex-column">
              <small class="card-date mb-2">
                <?php echo date('F d, Y', strtotime($blog['date'])); ?>
              </small>
              <h5 class="card-title"><?php echo htmlspecialchars($blog['title']); ?></h5>
              <p class="card-text flex-grow-1">
                <?php 
                  $detail = htmlspecialchars($blog['detail']);
                  echo strlen($detail) > 100 ? substr($detail, 0, 100) . '...' : $detail;
                ?>
              </p>
              <a href="./student/blogpage.php?id=<?php echo $blog['id']; ?>" class="read-more mt-auto">Read more</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center">No blog posts available.</p>
    <?php endif; ?>

  </div>
</div>

<?php include_once "./fragments/footer.php"; ?>