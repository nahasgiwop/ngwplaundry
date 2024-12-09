

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">NGLaundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('orders'); ?>">Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('customers'); ?>">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('reports'); ?>">Reports</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('settings'); ?>">Settings</a></li>
            </ul>
        </div>
    </div>
