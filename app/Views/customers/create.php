<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Add New Customer</h1>
    
    <!-- Card Container for Better Styling -->
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Form -->
            <form action="<?= site_url('customers/store') ?>" method="post">
                <?= csrf_field(); ?>

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                </div>

                <!-- Phone Field -->
                <div class="form-group">
                    <label for="phone" class="font-weight-bold">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number" pattern="^\d{10}$" title="Phone number must be 10 digits">
                </div>

                <!-- Address Field -->
                <div class="form-group">
                    <label for="address" class="font-weight-bold">Address</label>
                    <textarea name="address" class="form-control" rows="4" placeholder="Enter address"></textarea>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group text-center">
                    <!-- Save Button -->
                    <button type="submit" class="btn btn-primary btn-lg">Save Customer</button>
                    <!-- Cancel Button -->
                    <a href="<?= site_url('customers') ?>" class="btn btn-secondary btn-lg ml-2">Cancel</a>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>
