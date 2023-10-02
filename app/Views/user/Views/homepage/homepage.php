<?php

$this->extend('user/home');
$this->section('page');

?>

<!-- About Start -->
    <?= $this->include('user/Views/homepage/about.php') ?>
<!-- About End -->

<!-- Features Start -->
    <?= $this->include('user/Views/homepage/features.php') ?>
<!-- Features End -->

<!-- Service Start -->
    <?= $this->include('user/Views/homepage/service.php') ?>
<!-- Service End -->

<!-- Pricing Plan Start -->
    <?= $this->include('user/Views/homepage/pricingplan.php') ?>
<!-- Pricing Plan End -->

<!-- Testimonial Start -->
    <?= $this->include('user/Views/homepage/testimonial.php') ?>
<!-- Testimonial End -->

<!-- Team Start -->
    <?= $this->include('user/Views/homepage/team.php') ?>
<!-- Team End -->

<!-- Blog Start -->
    <?= $this->include('user/Views/homepage/blog.php') ?>
<!-- Blog End -->

<!-- Vendor Start -->
    <?= $this->include('user/Views/homepage/vendor.php') ?>
<!-- Vendor End -->
<?php $this->endSection(); ?>