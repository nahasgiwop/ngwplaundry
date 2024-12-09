<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Card Wrapper -->
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white">
                    <h4 class="card-title mb-0">Add New Order</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('orders/store') ?>" method="post">
                        <?= csrf_field(); ?>
                        
                        <!-- Customer Name -->
                        <div class="form-group">
                            <label for="customer_name">Customer Name</label>
                            <input type="text" name="customer_name" id="customer_name" 
                                   class="form-control" placeholder="Enter customer name" required>
                        </div>
                        
                        <!-- Order Date -->
                        <div class="form-group">
                            <label for="order_date">Order Date</label>
                            <input type="date" name="order_date" id="order_date" 
                                   class="form-control" required>
                        </div>
                        
                        <!-- Total Price -->
                        <div class="form-group">
                            <label for="total_price">Total Price</label>
                            <input type="number" name="total_price" id="total_price" 
                                   class="form-control" placeholder="Enter total price" required>
                        </div>
                        
                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                                <option value="canceled">Canceled</option>
                            </select>
                        </div>
                        
                        <!-- Buttons -->
                        <div class="form-group text-right">
                            <a href="<?= site_url('orders') ?>" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Save Order</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card Wrapper -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
