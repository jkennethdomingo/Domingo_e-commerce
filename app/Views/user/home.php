<?php

$this->extend('main');
$this->section('body');

?>
<!-- Spinner Start -->
    <?= $this->include('user/Components/spinner.php') ?>
<!-- Spinner End -->

<!-- Topbar Start -->
    <?= $this->include('user/Components/topbar.php') ?>
<!-- Topbar End -->

<!-- Navbar & Carousel Start -->
    <?= $this->include('user/Components/navbar.php') ?>
<!-- Navbar & Carousel End -->

<!-- Full Screen Search Start -->
    <?= $this->include('user/Components/fullscreensearch.php') ?>
<!-- Full Screen Search End -->

<?= $this->renderSection('page') ?>

<!-- Footer Start -->
    <?= $this->include('user/Components/footer.php') ?>
<!-- Footer End-->

<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php $this->endSection(); ?>

    