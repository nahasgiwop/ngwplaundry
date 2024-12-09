<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Add Payment</h2>

<form method="post" action="<?= base_url('payments/store') ?>" class="bg-light p-4 rounded shadow-sm">
    <!-- Input Order ID -->
    <div class="mb-3">
        <label for="order_id" class="form-label">Order ID</label>
        <input type="number" class="form-control" id="order_id" name="order_id" required>
    </div>

    <!-- Input Amount -->
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
    </div>

    <!-- Input Payment Date -->
    <div class="mb-3">
        <label for="payment_date" class="form-label">Payment Date</label>
        <input type="date" class="form-control" id="payment_date" name="payment_date" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endSection() ?>
