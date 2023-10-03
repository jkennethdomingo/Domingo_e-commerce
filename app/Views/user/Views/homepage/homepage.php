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


<!-- Pricing Plan Start -->
    <?= $this->include('user/Views/homepage/pricingplan.php') ?>
<!-- Pricing Plan End -->

<!-- Vendor End -->
<?php $this->endSection(); ?>