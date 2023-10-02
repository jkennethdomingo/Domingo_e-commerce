<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel"><?= isset($modalTitle) ? $modalTitle : 'Add Product' ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your modal content here -->
                <form action="<?= base_url('addOrEditProduct') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" value="<?= isset($product) ? $product['name'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Product Description</label>
                        <textarea class="form-control" id="productDescription" name="productDescription" rows="1"><?= isset($product) ? $product['description'] : '' ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="productImage" name="productImage">
                        <?php if (isset($product) && !empty($product['image'])): ?>
                            <p>Current Image: <img src="<?= base_url('uploads/' . $product['image']); ?>" alt="Product Image" width="100"></p>
                            <input type="hidden" name="currentImage" value="<?= $product['image'] ?>">
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="productPrice" name="productPrice" value="<?= isset($product) ? $product['price'] : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Product Category</label>
                        <select class="form-select" id="productCategory" name="productCategory">
                            <option disabled selected>Select a category</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['category']; ?>" <?= isset($product) && $product['category'] === $category['category'] ? 'selected' : '' ?>><?= $category['category']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productQuantity" class="form-label">Product Quantity</label>
                        <input type="number" class="form-control" id="productQuantity" name="productQuantity" min="0" value="<?= isset($product) ? $product['quantity'] : '' ?>">
                    </div>
                    <input type="hidden" name="productId" value="<?= isset($product['id']) ? $product['id'] : '' ?>">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><?= isset($submitButtonLabel) ? $submitButtonLabel : 'Save Product' ?></button>
            </div>
            </form>
        </div>
    </div>
</div>
