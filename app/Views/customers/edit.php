<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Customer</h1>

    <!-- Card Container for Better Styling -->
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Form -->
            <form action="<?= site_url('customers/update/' . $customer['id']) ?>" method="post">
                <?= csrf_field(); ?>

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Full Name</label>
                    <input type="text" name="name" class="form-control" value="<?= esc($customer['name']) ?>" placeholder="Enter full name" required>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= esc($customer['email']) ?>" placeholder="Enter email address" required>
                </div>

                <!-- Phone Field -->
                <div class="form-group">
                    <label for="phone" class="font-weight-bold">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?= esc($customer['phone']) ?>" placeholder="Enter phone number" pattern="^\d{10}$" title="Phone number must be 10 digits">
                </div>

                <!-- Address Field -->
                <div class="form-group">
                    <label for="address" class="font-weight-bold">Address</label>
                    <textarea name="address" class="form-control" rows="4" placeholder="Enter address"><?= esc($customer['address']) ?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Update Customer</button>
                    <a href="<?= site_url('customers') ?>" class="btn btn-secondary btn-lg ml-2">Cancel</a>

                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
