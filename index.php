<?php 
include_once "./fragments/navbar.php";
// require_once "./dbFunctions/.php";
// $data=display();
// if($data){
        
// ?>
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
        <h4 class="text-dark text-center">UpComing Events</h4>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/kabadi.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Kabadi</h1>
                            <p class="mt-2">North lawn</p>
                            <p class="mt-2">Date-23 april 2025</p>
                            <p class="mt-2">Time-3 pm</p>
<p class="mt-2"></p>"Kabaddi Tournament 2025 – Unleash the Warrior in You!"

Get ready for an adrenaline-pumping showdown as teams battle it out in the ultimate test of strength, strategy, and agility! Kabaddi, the ancient sport of grit and glory, demands lightning-fast reflexes and unbreakable teamwork. Step onto the mat, raid with confidence, and defend with resilience. Who will emerge victorious in this clash of titans?

Join us for an electrifying Kabaddi event and witness the spirit of true sportsmanship!</p>
                            <a class="btn btn-primary mt-3">Register</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/tug.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Tug of War – Strength Showdown</h1>
                            <p class="mt-2">footbal grund</p>
                            <p class="mt-2">Date-23 april 2025</p>
                            <p class="mt-2">9 am</p>
                            <p> Tug of War is the ultimate test of strength, teamwork, and endurance! Two teams go head-to-head, pulling a thick rope in opposite directions. The goal? Drag the opposing team across the centerline to claim victory. Only the most coordinated and determined team will triumph in this battle of power!</p>
                            <a class="btn btn-primary mt-3">Register</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/relay6.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Relay Race – Speed & Strategy</h1>
                            <p class="mt-2">North Lawn</p>
                            <p class="mt-2">Date-23 april 2025</p>
                            <p class="mt-2">Time-11 am</p>
                            <p>🏃‍♂️💨 Description: Get ready to sprint, pass, and conquer in the ultimate test of speed and coordination! The Relay Race is not just about running—it’s about teamwork, precision, and perfect baton exchanges. Each runner must give their all before handing off the baton, ensuring their team reaches the finish line first. Only the fastest and most synchronized team will emerge victorious!</p>
                            <a class="btn btn-primary mt-3">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="visually-hidden">Next</span>
            </button>
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
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/aaaa.jpg" class="card-img-top" style="height: 60%;" alt="Basketball">
                        <div class="card-body">
                            <h5 class="card-title">Basket Ball</h5>
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/volleybal.webp" class="card-img-top" style="height: 60%;" alt="Volleyball">
                        <div class="card-body">
                            <h5 class="card-title">Volley Ball</h5>
                            <p class="card-text">Some quick example text.</p>
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
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/tennis.jpg" class="card-img-top" style="height: 60%;" alt="Tennis">
                        <div class="card-body">
                            <h5 class="card-title">Tennis</h5>
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem; transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/chess.webp" class="card-img-top" style="height: 60%;" alt="Chess">
                        <div class="card-body">
                            <h5 class="card-title">Chess</h5>
                            <p class="card-text">Some quick example text.</p>
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