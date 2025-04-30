<head>
    <style>
        .event-card {
      position: relative;
      overflow: hidden;
      border-radius: 0.25rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding-top: 2.5rem;
    }

    .event-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      transform: skewX(-15deg);
      transform-origin: left;
    }

    .blue-bar::before {
      background-color: #004aad;
    }

    .red-bar::before {
      background-color: #c00000;
    }

    .event-date {
      font-weight: 700;
      font-size: 1.1rem;
    }

    .event-title {
      margin-bottom: 0.5rem;
    }

    .view-link {
      color: #004aad;
      font-weight: 500;
      text-decoration: none;
    }

    .view-link:hover {
      text-decoration: underline;
    }

    /* Marquee Wrapper */
    .marquee-container {
     height: 300px;
      overflow: hidden;
      position: relative;
    }

    .marquee-content {
      display: flex;
      flex-direction: column;
      animation: scroll-up 40s  infinite;
    }

    @keyframes scroll-up {
  0% { transform: translateY(0); }
  100% { transform: translateY(-50%); }
}
    
    </style>
</head>
<?php 
include_once "./fragments/navbar.php";
require_once "./dbFunctions/student_function.php";
?>
<div class="Div mb-5">
    <img src="./assets/images/land8.jpg" class="image" style="height:800px;width:100%" alt="Background Image">
    <div class="text-overlay">
        <h1>Welcome Silicon Sport Club</h1>
        <h3>Explore Sports and Enjoy the Game </h3>
        <div class="text-button-container">
            <p class="para">DO YOU WANT TO JOIN THE SPORT CLUB?</p>
            <a href="./student/regform.php" class="btn btn-primary">Register</a>
            <!-- <button class="btn btn-danger">Register</button> -->
        </div>
    </div>
</div>
<div class="event">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="mb-3">Student Events</h4>
                <div class="marquee-container">
                    <div class="marquee-content">
                <?php
                $events = display();
                foreach($events as $event){
                    if($event['event_for'] == "student"){
                ?>
                        <div class="card event-card red-bar mb-4 p-3">
                            <div class="event-date"><?php echo $event['date']?></div>
                            <div class="event-title"> <?php echo $event['topic']?></div>
                            <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                        </div>
                <?php
                    }

                }
                ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h4 class="mb-3">Faculty Events</h4>
                <div class="marquee-container">
                    <div class="marquee-content">
                        <?php
                        $events = display();
                        foreach($events as $event){
                            if($event['event_for'] == "faculty"){
                        ?>
                            <div class="card event-card blue-bar mb-4 p-3">
                                <div class="event-date"><?php echo $event['date']?></div>
                                <div class="event-title"> <?php echo $event['topic']?></div>
                                <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                            </div>
                        <?php
                            }
                        }
                        ?>
                   </div>
                </div>
           </div>
        </div>
    </div>
    
</div>
<div class="">
<?php
require_once "./dbFunctions/student_function.php";
$clubs = getAllClubs();

$chunks = array_chunk($clubs, 3); // each carousel item will contain 3 cards
?>

<h4 class="text-dark text-center mt-4">Our Clubs</h4>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($chunks as $index => $clubSet): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <div class="cards-wrapper d-flex justify-content-center gap-4">
                    <?php foreach ($clubSet as $club): ?>
                        <div class="card hover" style="width: 22rem; height: 28rem; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                            <img src="uploads/<?php echo htmlspecialchars($club['image']); ?>" class="card-img-top" style="height: 60%;" alt="<?php echo $club['clubName']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($club['clubName']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($club['detail']); ?></p>
                                <a href="<?php echo strtolower($club['clubName']) . '.php'; ?>" class="btn btn-primary">Visit</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="blog py-5" style="background:rgba(193, 197, 200, 0.05);">
    <div class="container mb-5">
        <h3 class="text-dark text-center fw-bold">Blogs</h3>
        <div class="row mt-4">
    <?php 
    $blogs = showBlog();
    if ($blogs): ?>
        <?php foreach ($blogs as $blog): ?>
            <div class="col-sm-6 mt-5">
                <div class="custom-media d-flex border rounded shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./uploads/<?php echo $blog['image']; ?>" class="img-fluid h-100 ">
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark">
                                <span class="meta text-muted"><?php echo date('F d, Y', strtotime($blog['date'])); ?></span>
                                <h5 class="fw-bold mt-2"><?php echo $blog['title']; ?></h5>
                                <p>
                                    <?php 
                                        $desc = htmlspecialchars($blog['detail']);
                                        echo strlen($desc) > 120 ? substr($desc, 0, 120) . '...' : $desc; 
                                    ?>
                                </p>
                                <a href="blogpage.php?id=<?php echo $blog['id']; ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <?php endforeach; ?>
    <?php else: ?>
        <p>No blogs found.</p>
    <?php endif; ?>
</div>
            </div> 
        </div>
    </div>
</div>
<?php include_once "./fragments/footer.php";?>