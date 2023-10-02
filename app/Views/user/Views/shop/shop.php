<?php
$this->extend('user/home');
$this->section('page');
?>

<main class="container mt-4 py-5">
    <!-- Search Bar and Category Sorting -->
    <div class="row mb-3">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Search products">
        </div>
        <div class="col-md-4">
            <select class="form-control" id="categoryFilter">
                <option value="all">All Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['category']; ?>"><?= $category['category']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <!-- Product Cards -->
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="/uploads/<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text">&#8369;<?= $product['price']; ?></p>
                        <button class="btn btn-primary view-product" data-toggle="modal" data-product-id="<?= $product['id']; ?>">View Product</button>
                    </div>
                </div>
            </div>

            <!-- Product Modal (Move this inside the loop) -->
            <div class="modal fade" id="product<?= $product['id']; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="product<?= $product['id']; ?>ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="product<?= $product['id']; ?>ModalLabel"><?= $product['name']; ?> Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/uploads/<?= $product['image']; ?>" class="img-fluid" alt="<?= $product['name']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <h5>Name: <?= $product['name']; ?></h5>
                                    <p>Description: <?= $product['description']; ?></p>
                                    <p>Price: &#8369;<?= $product['price']; ?></p>
                                    <p>Quantity: <?= $product['quantity']; ?></p>
                                    <p>Category: <?= $product['category']; ?></p>
                                    <!-- Add more details here -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php $this->endSection(); ?>
