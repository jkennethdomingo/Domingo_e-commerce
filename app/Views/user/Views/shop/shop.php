<?php
$this->extend('user/home');
$this->section('page');
?>

<main class="container mt-4 py-5">
    
<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Welcome <?= $_SESSION['username']?>!</h5>
            <h1 class="mb-0">Shop Now!</h1>
        </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <select class="form-control" id="categoryFilter">
                <option value="all">All Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['category']; ?>"><?= $category['category']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row">
        <?php $counter = 0; ?>
        <?php foreach ($products as $product): ?>
            <?php if ($counter % 3 == 0): ?>
                </div>
                <div class="row">
            <?php endif; ?>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 same-size-img" src="/uploads/<?= $product['image']; ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-primary view-product" data-toggle="modal" data-target="#product<?= $product['id']; ?>Modal" data-product-id="<?= $product['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary"><?= $product['name']; ?></h4>
                        <p class="text-uppercase m-0">&#8369;<?= $product['price']; ?></p>
                    </div>
                </div>
            </div>

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
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php $counter++; ?>
        <?php endforeach; ?>
    </div>
</main>

<?= $this->include('/user/Views/shop/newReleases') ?>

<?php $this->endSection(); ?>
