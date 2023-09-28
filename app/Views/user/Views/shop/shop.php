<?php

$this->extend('user/home');
$this->section('page');

?>

Shop<a href="<?= base_url('logout'); ?>" class="btn btn-danger">Logout</a>

<?php $this->endSection(); ?>