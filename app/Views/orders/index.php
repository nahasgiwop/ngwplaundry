<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 font-weight-bold text-primary">Orders Management</h1>
        <a href="<?= site_url('orders/create') ?>" class="btn btn-success btn-lg">
            <i class="fas fa-plus-circle"></i> Add Order
        </a>
    </div>

    <!-- Alert Section -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Orders Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Order Date</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($orders) && is_array($orders)): ?>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td class="text-center"><?= $order['id']; ?></td>
                            <td><?= esc($order['customer_name']); ?></td>
                            <td class="text-center"><?= date('d F Y', strtotime($order['order_date'])); ?></td>
                            <td class="text-right">Rp <?= number_format($order['total_price'], 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <span class="badge badge-<?= $order['status'] === 'Completed' ? 'success' : ($order['status'] === 'Pending' ? 'warning' : 'danger'); ?>">
                                    <?= $order['status']; ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="<?= site_url('orders/edit/' . $order['id']); ?>" class="btn btn-warning btn-sm" title="Edit Order">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="<?= site_url('orders/delete/' . $order['id']); ?>" method="post" style="display:inline-block;">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" title="Delete Order">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">No orders found. Please add new orders!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
