<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Customer List</h1>

    <!-- Menampilkan pesan sukses setelah operasi CRUD -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success animate__animated animate__fadeIn">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <!-- Button untuk Menambahkan Customer Baru -->
    <a href="<?= site_url('customers/create') ?>" class="btn btn-success mb-3 animate__animated animate__bounceIn">
        <i class="fas fa-user-plus"></i> Add New Customer
    </a>
    
    <!-- Tabel Daftar Customer -->
    <div class="table-responsive animate__animated animate__fadeInUp">
        <table class="table table-hover table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                        <td><?= esc($customer['address']) ?></td>
                        <td class="d-flex">
                            <!-- Edit Button -->
                            <a href="<?= site_url('customers/edit/' . $customer['id']) ?>" class="btn btn-warning btn-sm mr-2 animate__animated animate__pulse">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <!-- Delete Button (Modal Confirmation) -->
                            <button class="btn btn-danger btn-sm animate__animated animate__shakeX" data-toggle="modal" data-target="#deleteModal<?= $customer['id'] ?>">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>

                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="deleteModal<?= $customer['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the customer <strong><?= esc($customer['name']) ?></strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a href="<?= site_url('customers/delete/' . $customer['id']) ?>" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Tambahkan JQuery, Popper.js, dan Bootstrap JS untuk modal -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Custom CSS -->
<style>
    /* Style tambahan untuk mempercantik tabel */
    .table th, .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }

    .btn {
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.1);
    }
</style>

<?= $this->endSection(); ?>
