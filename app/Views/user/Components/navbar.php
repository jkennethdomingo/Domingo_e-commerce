<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="<?=base_url('')?>" class="navbar-brand p-0">
        <h1 class="m-0">
            <img src="/assets/icons/kshop-t-svg.svg" alt="Kshop Logo" class="me-2 custom-image" />
            K-Shop Kingdom
        </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?= base_url('') ?>" class="nav-item nav-link <?= ($currentPath === '/') ? 'active' : '' ?>">Home</a>
                <a href="<?= base_url('shop') ?>" class="nav-item nav-link <?= ($currentPath === '/shop') ? 'active' : '' ?>">Shop</a>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <span class="btn btn-primary py-2 px-4 ms-3">
                        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                            <?= isset($_SESSION['username']) ? ucfirst($_SESSION['username']) : '' ?>
                        <?php else: ?>
                            Login
                        <?php endif; ?>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <!-- Include the same dropdown menu items as in the user section above -->
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
                            <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        <?php else: ?>
                            <a class="dropdown-item" href="<?= base_url('login'); ?>">
                                <i class="bx bx-log-in me-2"></i>
                                <span class="align-middle">Login</span>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </li>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="/assets/carousel/lesserafim.jpg" alt="Image">
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
                <img class="w-100" src="/assets/carousel/ive.jpg" alt="Image">
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