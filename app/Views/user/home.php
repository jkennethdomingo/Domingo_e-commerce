<?php

$this->extend('main');
$this->section('body');

?>
<!-- Spinner Start -->
    <?= $this->include('user/homepage/spinner.php') ?>
<!-- Spinner End -->

<!-- Topbar Start -->
    <?= $this->include('user/homepage/topbar.php') ?>
<!-- Topbar End -->

<!-- Navbar & Carousel Start -->
    <?= $this->include('user/homepage/navbar.php') ?>
<!-- Navbar & Carousel End -->

<!-- Full Screen Search Start -->
    <?= $this->include('user/homepage/fullscreensearch.php') ?>
<!-- Full Screen Search End -->

<!-- Facts Start -->
    <?= $this->include('user/homepage/facts.php') ?>
<!-- Facts End -->

<!-- About Start -->
    <?= $this->include('user/homepage/about.php') ?>
<!-- About End -->

<!-- Features Start -->
    <?= $this->include('user/homepage/features.php') ?>
<!-- Features End -->

<!-- Service Start -->
    <?= $this->include('user/homepage/service.php') ?>
<!-- Service End -->

<!-- Pricing Plan Start -->
    <?= $this->include('user/homepage/pricingplan.php') ?>
<!-- Pricing Plan End -->

<!-- Testimonial Start -->
    <?= $this->include('user/homepage/testimonial.php') ?>
<!-- Testimonial End -->

<!-- Team Start -->
    <?= $this->include('user/homepage/team.php') ?>
<!-- Team End -->

<!-- Blog Start -->
    <?= $this->include('user/homepage/blog.php') ?>
<!-- Blog End -->

<!-- Vendor Start -->
    <?= $this->include('user/homepage/vendor.php') ?>
<!-- Vendor End -->

<!-- Footer Start -->
    <?= $this->include('user/homepage/footer.php') ?>
<!-- Footer End-->

<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php $this->endSection(); ?>

    