<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Payments List</h2>

<!-- Form Pencarian -->
<form method="get" action="<?= base_url('payments/index') ?>" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by Order ID or Amount" value="<?= $search ?? '' ?>">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

<!-- Tombol untuk menambah pembayaran baru -->
<a href="<?= base_url('payments/create') ?>" class="btn btn-success mb-3">Add Payment</a>

<!-- Tabel Daftar Pembayaran -->
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Order ID</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($payments as $payment): ?>
        <tr>
            <td><?= $payment['id'] ?></td>
            <td><?= $payment['order_id'] ?></td>
            <td><?= number_format($payment['amount'], 2) ?></td>
            <td><?= $payment['payment_date'] ?></td>
            <td>
                <a href="<?= base_url('payments/edit/' . $payment['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('payments/delete/' . $payment['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Paginasi -->
<?= $pager->links() ?>

<?= $this->endSection() ?>
