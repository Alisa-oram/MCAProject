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
      animation: scroll-up 10s linear infinite;
    }

    @keyframes scroll-up {
      0% { transform: translateY(100%); }
      100% { transform: translateY(-100%); }
    }
          
    </style>
</head>
<?php 
include_once "./fragments/navbar.php";
// require_once "./dbFunctions/.php";
// $data=display();
// if($data){
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
                        <div class="card event-card blue-bar mb-4 p-3">
                            <div class="event-date">22 MAR 2025</div>
                            <div class="event-title">Workshop on Elements of Writing</div>
                            <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                        </div>
                        <div class="card event-card blue-bar mb-4 p-3">
                            <div class="event-date">25 MAR 2025</div>
                            <div class="event-title">AI Hackathon</div>
                            <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h4 class="mb-3">Faculty Events</h4>
                <div class="marquee-container">
                    <div class="marquee-content">
                        <div class="card event-card red-bar mb-4 p-3">
                            <div class="event-date">21 – 22 MAR 2025</div>
                            <div class="event-title">NWET 2025</div>
                            <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                        </div>
                        <div class="card event-card red-bar mb-4 p-3">
                            <div class="event-date">28 MAR 2025</div>
                            <div class="event-title">Workshop on Pedagogy</div>
                            <a href="#" class="view-link">VIEW DETAILS &raquo;</a>
                        </div>
                   </div>
                </div>
           </div>
        </div>
    </div>
</div>
<div class="">
    <h4 class="text-dark text-center mt-4">Our Clubs</h4>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="cards-wrapper d-flex justify-content-center gap-4">
                    <div class="card hover" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/badminton.jpg" class="card-img-top" style="height: 60%;" alt="badminton">
                        <div class="card-body">
                            <h5 class="card-title">Badminton</h5>
                            <p class="card-text">A fast-paced racket sport played with a shuttlecock over a net.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/aaaa.jpg" class="card-img-top" style="height: 60%;" alt="Basketball">
                        <div class="card-body">
                            <h5 class="card-title">Basket Ball</h5>
                            <p class="card-text">A team sport where players aim to score by shooting a ball through a hoop.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/volleybal.webp" class="card-img-top" style="height: 60%;" alt="Volleyball">
                        <div class="card-body">
                            <h5 class="card-title">Volley Ball</h5>
                            <p class="card-text">A sport where two teams hit a ball over a net aiming to land it on the opponent's court.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="cards-wrapper d-flex justify-content-center gap-4">
                    <div class="card hover" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/footbal.jpg" class="card-img-top" style="height: 60%;" alt="Football">
                        <div class="card-body">
                            <h5 class="card-title">Football</h5>
                            <p class="card-text">A globally popular game where teams score by getting a ball into the opponent’s goal.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/cricket.jpg" class="card-img-top" style="height: 60%;" alt="Tennis">
                        <div class="card-body">
                            <h5 class="card-title">Cricket</h5>
                            <p class="card-text">A bat-and-ball game played between two teams aiming to score the most runs.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/kabadi.jpg" class="card-img-top" style="height: 60%;" alt="Chess">
                        <div class="card-body">
                            <h5 class="card-title">Kabadi</h5>
                            <p class="card-text">A contact team sport where players tag opponents while holding their breath.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
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
</div>



<div class="blog py-5" style="background:rgba(193, 197, 200, 0.05);">
    <div class="container mb-5">
        <h3 class="text-dark text-center fw-bold">Blogs</h3>
        <div class="row mt-4">
            <div class="col-sm-6 mt-5">
                <div class="custom-media d-flex border rounded shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/kabadi2.jpg" class="img-fluid h-100 rounded">
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark">
                                <span class="meta text-muted">May 20, 2025</span>
                                <h5 class="fw-bold mt-2"> The Rise of Kabaddi</h5>
                                <p>Kabaddi, once a rural pastime, has evolved into a thrilling international sport. Its mix of agility, strength, and strategy captivates audiences worldwide. Discover its journey from</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-sm-6 mt-5">
                <div class="custom-media d-flex border rounded shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/img3.jpg" class="img-fluid h-100 rounded">
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark">
                                <span class="meta text-muted">May 20, 2025</span>
                                <h5 class="fw-bold mt-2">The Spirit of Sports</h5>
                                <p> Sports go beyond competition—they instill discipline, teamwork, and perseverance. Whether on the field or in life, the lessons learned from sports shape character and drive success.</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<?php include_once "./fragments/footer.php";?>