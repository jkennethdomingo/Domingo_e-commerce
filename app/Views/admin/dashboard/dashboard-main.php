<?php $this->extend('admin/admin'); ?>

<?php $this->section('content'); ?>
    <!-- Content specific to the dashboard main view -->
    <?= $this->include('admin/dashboard/dashboard-or-stat.php') ?>
    <?= $this->include('admin/dashboard/expense-overview.php') ?>
    <?= $this->include('admin/dashboard/transactions.php') ?>
<?php $this->endSection(); ?>
