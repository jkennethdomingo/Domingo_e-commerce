<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="<?= base_url('') ?>" class="navbar-brand p-0">
            <h1 class="m-0">
                <img src="/assets/icons/kshop-t-svg.svg" alt="Kshop Logo" class="me-2 custom-image" />
                K-Shop Kingdom
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0">
                <li class="nav-item">
                    <a href="<?= base_url('') ?>" class="nav-link <?= ($currentPath === '/') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('shop') ?>" class="nav-link <?= ($currentPath === '/shop') ? 'active' : '' ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                        <a class="nav-link" href="<?= base_url('logout'); ?>">
                            <i class="bx bx-power-off me-2"></i>
                            Log Out
                        </a>
                    <?php else: ?>
                        <a class="nav-link" href="<?= base_url('login'); ?>">
                            <i class="bx bx-log-in me-2"></i>
                            Login
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="/assets/carousel/lesserafim.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Discover Exclusive K-pop Merchandise</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Explore the World of K-pop Collectibles</h1>
                        <a href="<?= base_url('shop') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Shop Now</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Join Fan Meets</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="/assets/carousel/ive.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Meet Your K-pop Idols</h5>
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
