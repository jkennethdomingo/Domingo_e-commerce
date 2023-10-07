<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">New Releases</h5>
            <h1 class="mb-0">Check out the new releases!</h1>
        </div>
        <?php
            $newReleases = array_slice($products, -4);
        ?>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <?php foreach ($newReleases as $product): ?>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-4 pb-3 px-4">
                    <img class="img-fluid rounded" src="/uploads/<?= $product['image']; ?>" style="width: 75px; height: 75px; object-fit:cover;">
                    <div class="ps-4">
                    <h4 class="text-primary mb-1<?= strlen($product['name']) > 23 ? ' reduce-font-size' : ''; ?>">
                        <?= $product['name']; ?>
                    </h4>
                        <small class="text-uppercase"><?= $product['category']; ?></small>
                    </div>
                </div>
                <div class="pt-3 pb-4 px-4">
                    <div> 
                    <?= strlen($product['description']) > 95 ? substr($product['description'], 0, 95) . "..." : $product['description']; ?>
                    </div>
                    <a class="d-flex justify-content-end mt-3 view-product" data-toggle="modal" data-target="#product<?= $product['id']; ?>Modal" data-product-id="<?= $product['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->
