<?php 
include_once "./fragments/navbar.php";
// require_once "./dbFunctions/.php";
// $data=display();
// if($data){
        
?>
<div class="Div mb-5">
    <img src="./assets/images/heroImg.jpg" class="image" style="height:800px;width:100%" alt="Background Image">
    <div class="text-overlay">
        <h1>Welcome to My Website</h1>
        <h3>Explore the Best Content Here</h3>
        <div class="text-button-container">
            <p class="para">DO YOU WANT TO JOIN THE SPORT CLUB?</p>
            <a href="./student/regform.php" class="btn btn-danger">Register</a>
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
                            <img src="./assets/images/heroimg.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Game Name</h1>
                            <p class="mt-2">Location</p>
                            <p class="mt-2">Time</p>
                            <p class="mt-2">closing-Time</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quibusdam ullam rerum nihil dolores odit vero, distinctio aut. Non libero minima, quas quo est modi repellat cupiditate ad dignissimos necessitatibus quis! Maiores voluptas dolore explicabo vitae sunt quae similique, rerum ipsum et aliquam. Impedit eum labore quos optio amet nostrum consequuntur totam molestias consectetur minus, fugiat eligendi, commodi dolore asperiores!</p>
                            <a class="btn btn-primary mt-3">Register</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/heroimg.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Game Name</h1>
                            <p class="mt-2">Location</p>
                            <p class="mt-2">Time</p>
                            <p class="mt-2">closing-Time</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quas vel molestiae sint quae fugit, odio neque deserunt maxime minus nesciunt nulla illo quis. Veritatis, quidem tempora? Suscipit, possimus. Tenetur explicabo quia consequatur suscipit ratione beatae culpa error possimus amet facere quaerat at asperiores impedit fugit harum vel provident iste aspernatur, distinctio sit! Harum, iste dolores quasi esse sequi possimus!</p>
                            <a class="btn btn-primary mt-3">Register</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/heroimg.jpg" class="img-fluid rounded" alt="Slide 1">
                        </div>
                        <div class="col-md-6">
                            <h1 class="mt-2">Game Name</h1>
                            <p class="mt-2">Location</p>
                            <p class="mt-2">Time</p>
                            <p class="mt-2">closing-Time</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, inventore quos incidunt veniam numquam aperiam architecto cum voluptatem quaerat excepturi eligendi voluptatibus omnis hic libero, culpa, tenetur vel asperiores ab perspiciatis odio rerum necessitatibus! Sit explicabo, quidem consectetur totam animi esse quo tempore laudantium eos veritatis, rerum dolorem debitis iste cumque minima iure deleniti? Laboriosam dignissimos nemo ipsa tenetur obcaecati.</p>
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="cards-wrapper d-flex justify-content-center gap-4">
                    <div class="card hover" style="width: 22rem; height: 28rem;transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/heroimg.jpg" class="card-img-top" style="height: 60%;" alt="badminton">
                        <div class="card-body">
                            <h5 class="card-title">Badminton</h5>
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem;transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/heroimg.jpg" class="card-img-top" style="height: 60%;" alt="chess">
                        <div class="card-body">
                            <h5 class="card-title">Chess</h5>
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                    <div class="card hover d-none d-md-block" style="width: 22rem; height: 28rem;transition: all 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);">
                        <img src="./assets/images/heroimg.jpg" class="card-img-top" style="height: 60%;" alt="chess">
                        <div class="card-body">
                            <h5 class="card-title">Chess</h5>
                            <p class="card-text">Some quick example text.</p>
                            <a href="#" class="btn btn-primary">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="./assets/images/heroimg.jpg" class="card-img-top" alt="football">
                        <div class="card-body">
                        <h5 class="card-title">Football</h5>
                        <p class="card-text">Some quick example text.</p>
                        <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
                <div class="card d-none d-md-block">
                    <img src="./assets/images/heroimg.jpg" class="card-img-top" alt="tennis">
                    <div class="card-body">
                        <h5 class="card-title">Tennis</h5>
                        <p class="card-text">Some quick example text.</p>
                        <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
                <div class="card d-none d-md-block">
                    <img src="./assets/images/heroimg.jpg" class="card-img-top" alt="chess">
                    <div class="card-body">
                        <h5 class="card-title">Chess</h5>
                        <p class="card-text">Some quick example text.</p>
                        <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        </a>
</div>
<div class="blog py-5" style="background:rgba(193, 197, 200, 0.05);">
    <div class="container mb-5">
        <h3 class="text-dark text-center fw-bold">Blogs</h3>
        <div class="row mt-4">
            <div class="col-sm-6 mt-5">
                <div class="custom-media d-flex border rounded shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./assets/images/heroimg.jpg" class="img-fluid h-100 rounded">
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark">
                                <span class="meta text-muted">May 20, 2025</span>
                                <h5 class="fw-bold mt-2">Alisa's Insights</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
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
                            <img src="./assets/images/heroimg.jpg" class="img-fluid h-100 rounded">
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark">
                                <span class="meta text-muted">May 20, 2025</span>
                                <h5 class="fw-bold mt-2">Alisa's Insights</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
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