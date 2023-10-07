function toggleForms() {
    var loginForm = document.getElementById('loginForm');
    var registerForm = document.getElementById('registerForm');
    var loginToggle = document.getElementById('loginToggle');
    var registerToggle = document.getElementById('registerToggle');

    if (loginForm.style.display === "none") {
        registerForm.style.display = "none";
        loginForm.style.display = "flex";
        registerToggle.style.display = "none";
        loginToggle.style.display = "block";
    } else {
        loginForm.style.display = "none";
        registerForm.style.display = "flex";
        loginToggle.style.display = "none";
        registerToggle.style.display = "block";
    }
}

// Function to show the larger "View Product" modal
function showLargeProductModal(productId) {
    const modalId = `#product${productId}Modal`;
    $(modalId).modal('show');
}

// Attach a click event listener to the "View Product" buttons
$('.view-product').on('click', function () {
    const productId = $(this).data('product-id');
    showLargeProductModal(productId);
});

document.addEventListener("DOMContentLoaded", function() {
    const categoryFilter = document.getElementById("categoryFilter");
    const productItems = document.querySelectorAll(".main-cont");
    const noProductsAlert = document.getElementById("noProductsAlert");

    categoryFilter.addEventListener("change", function() {
        const selectedCategory = categoryFilter.value;
        let hasMatchingProducts = false;

        productItems.forEach(function(productItem) {
            const productId = productItem.querySelector(".view-product").getAttribute("data-product-id");
            const productCategory = document.getElementById("serverData" + productId).value;

            if (selectedCategory === "all" || selectedCategory === productCategory) {
                productItem.classList.remove("d-none");
                hasMatchingProducts = true;
            } else {
                productItem.classList.add("d-none");
            }
        });

        // Check if there are matching products
        if (!hasMatchingProducts) {
            noProductsAlert.style.display = "flex";
        } else {
            noProductsAlert.style.display = "none";
        }

        // Adjust the grid layout to move up products in rows with 1 or 2 items
        const productRows = document.querySelectorAll(".row");
        productRows.forEach(function(row) {
            const rowItems = row.querySelectorAll(".main-cont:not(.d-none)");
            if (rowItems.length <= 2) {
                const nextRow = row.nextElementSibling;
                if (nextRow) {
                    rowItems.forEach(function(item) {
                        nextRow.appendChild(item);
                    });
                }
            }
        });
    });
});




