<?= $this->include('include/admin/header.php') ?>
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

            <!-- Render the content section defined in extending templates -->
            <?= $this->renderSection('content') ?>
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
<?= $this->include('include/admin/endtag.php') ?>