    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/admin-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/admin-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/admin-template/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/admin-template/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/admin-template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/admin-template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/admin-template/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        $(document).ready(function() {
            // Display the modal when the "Add Product" button is clicked
            $("#openAddProductModal").click(function() {
                $("#addProductModal").modal("show");
            });

            // You can also add code here to handle form submission and other functionality
            // For example, if you want to handle the form submission when the "Save Product" button is clicked:
            $("#addProductModal").on("click", ".btn-primary", function() {
                // Handle the form submission logic here
                // You can access form fields using their IDs like $("#productName").val() and $("#productDescription").val()
                // For this example, let's just close the modal
                $("#addProductModal").modal("hide");
            });
        });
        
    </script>
    </body>

    </html>