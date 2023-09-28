<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="<?=base_url('')?>" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fab fa-shopify me-2"></i>K-Shop Kingdom</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?=base_url('')?>" class="nav-item nav-link active">Home</a>
                <a href="<?=base_url('shop')?>" class="nav-item nav-link">Shop</a>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="login" class="btn btn-primary py-2 px-4 ms-3">Log In</a>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="assets/st-template/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Discover Exclusive Kpop Merchandise</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Explore the World of Kpop Collectibles</h1>
                        <a href="<?=base_url('shop')?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Shop Now</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Join Fan Meets</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/st-template/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Meet Your Kpop Idols</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Join Exclusive Fan Meets</h1>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Tickets</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Become a Member</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->