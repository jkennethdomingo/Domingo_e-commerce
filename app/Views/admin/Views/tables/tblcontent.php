<?= $this->include('admin/Views/tables/modals/addModal.php') ?>

<div class="content-wrapper"> 
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="#" class="btn btn-primary" id="openAddProductModal">Add Product</a></span></h4>
        
<!-- Hoverable Table rows -->
<div class="card">
    <h5 class="card-header">Manage Products</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php foreach ($products as $product): ?>
                <tr>
                    <td>
                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                        <span class="fw-medium"><?= $product['name']; ?></span>
                    </td>
                    <td><?= strlen($product['description']) > 50 ? substr($product['description'], 0, 50) . '...' : $product['description'] ?></td>
                    <td><?= $product['quantity']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td>
                        <span class="badge bg-label-primary me-1"><?= $product['category']; ?></span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/edit/<?= $product['id']; ?>"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="/deleteProduct/<?= $product['id']; ?>"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $pager->links('bootstrap', 'bootstrap_pagination') ?>

<!--/ Hoverable Table rows -->