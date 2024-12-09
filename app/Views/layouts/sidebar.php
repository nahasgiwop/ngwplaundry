<ul class="navbar-nav sidebar sidebar-light accordion bg-gradient-primary" id="accordionSidebar">
    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('img/logo5.webp') ?>" style="max-width: 140px;" alt="Logo">
        </div>
        <div class="sidebar-brand-text mx-3 text-white font-weight-bold">NGlaundry</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Menu Header (Non-interaktif) -->
    <div class="sidebar-heading text-white mt-3">
        Main Navigation
    </div>

    <hr class="sidebar-divider">

    <!-- Dashboard -->
    <li class="nav-item mt-3">
        <a class="nav-link text-white" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span class="ml-2">Dashboard</span>
        </a>
    </li>

    <!-- Orders -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('orders') ?>">
            <i class="fas fa-shopping-cart"></i>
            <span class="ml-2">Orders</span>
        </a>
    </li>

    <!-- Customers -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('customers') ?>">
            <i class="fas fa-users"></i>
            <span class="ml-2">Customers</span>
        </a>
    </li>

    <!-- Services -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('service') ?>">
            <i class="fas fa-concierge-bell"></i>
            <span class="ml-2">Services</span>
        </a>
    </li>

    <!-- Payments Dropdown -->


    <!-- Employees -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('employee') ?>">
            <i class="fas fa-user-tie"></i>
            <span class="ml-2">Employees</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('payments') ?>">
            <i class="fas fa-user-tie"></i>
            <span class="ml-2">Payments</span>
        </a>
    </li>

    <!-- Inventory -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('inventory') ?>">
            <i class="fas fa-boxes"></i>
            <span class="ml-2">Inventory</span>
        </a>
    </li>

    <!-- Reports -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('reports') ?>">
            <i class="fas fa-chart-bar"></i>
            <span class="ml-2">Reports</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('settings') ?>">
            <i class="fas fa-cogs"></i>
            <span class="ml-2">Settings</span>
        </a>
    </li>

    <!-- Profile, Register, and Logout - Dropdown -->
    <li class="nav-item">
        <a class="nav-link text-white" href="#" data-toggle="collapse" data-target="#userDropdown" aria-expanded="true" aria-controls="userDropdown">
            <i class="fas fa-user-circle"></i>
            <span class="ml-2">User</span>
        </a>
        <div id="userDropdown" class="collapse">
            <div class="bg-gradient-dark py-2 collapse-inner rounded">
                <h6 class="collapse-header text-white">User Options</h6>
                <a class="collapse-item text-white" href="<?= base_url('profile') ?>">Profile</a>
                <a class="collapse-item text-white" href="<?= base_url('auth/register') ?>">Register</a>
                <a href="<?= base_url('auth/login') ?>" class="btn btn-danger">Logout</a>
                </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
</ul> 



