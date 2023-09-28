<?php $this->extend('admin/admin'); ?>

<?php $this->section('content'); ?>
    <!-- Content specific to the table view -->
    <?= $this->include('admin/tables/tblcontent.php') ?>
<?php $this->endSection(); ?>
