<?php $this->extend('admin/admin'); ?>

<?php $this->section('body'); ?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <?= $this->include('admin/dashboard/menu.php') ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?= $this->include('admin/dashboard/navbar.php') ?>
            <!-- / Navbar -->
            
            <!-- Order Statistics -->
            <?= $this->include('admin/dashboard/dashboard-or-stat.php') ?>
            <!--/ Order Statistics -->
            
            <!-- Expense Overview -->
            <?= $this->include('admin/dashboard/expense-overview.php') ?>
            <!--/ Expense Overview -->
            
            <!-- Transactions -->
            <?= $this->include('admin/dashboard/transactions.php') ?>
            <!--/ Transactions -->
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <?= $this->include('admin/dashboard/footer.php') ?>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<?php $this->endSection(); ?>