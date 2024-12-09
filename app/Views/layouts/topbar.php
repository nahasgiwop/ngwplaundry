<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <!-- Nama Admin dan Foto Profil -->
        <a class="navbar-brand" href="<?= site_url('dashboard'); ?>">
        <img src="https://scontent.fupg5-1.fna.fbcdn.net/v/t39.30808-6/429827367_940090414393935_6690814084393877154_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeG6_gLkJ5ceF3VPC2i8x6o9pWEK1zVFiRqlYQrXNUWJGnuEyuB4ecLIBnXSq9g1wjEVXB_99S-mncCWneexxTMY&_nc_ohc=a34c6eUcqjkQ7kNvgHZa_0o&_nc_zt=23&_nc_ht=scontent.fupg5-1.fna&_nc_gid=ACH04_ad7K4R4h4ZdjCFXmD&oh=00_AYCd649kNTXcM6j51_OJf4fmEZIPYSgSzp3bSKMi4rakAw&oe=674F775B" alt="Profile Picture" class="profile-img">
        <span class="ml-2 font-weight-bold"><?= isset($admin_name) ? $admin_name : 'Nahas Giwop'; ?></span>
        </a>

        <!-- Kolom Pencarian -->
        <form class="form-inline ml-auto">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <!-- Ikon Notifikasi -->
        <ul class="navbar-nav ml-auto">
            <!-- Pesan -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('messages'); ?>">
                    <i class="fas fa-envelope"></i>
                    <span class="badge badge-danger">3</span> <!-- Jumlah pesan baru -->
                </a>
            </li>

            <!-- Pemberitahuan -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('notifications'); ?>">
                    <i class="fas fa-bell"></i>
                    <span class="badge badge-warning">5</span> <!-- Jumlah pemberitahuan baru -->
                </a>
            </li>

            <!-- Profil -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('profile'); ?>">
                <img src="<?= base_url('allpublic\img\boy.png'); ?>" class="rounded-circle" alt="Admin" style="width: 20px; height: 20px; object-fit: cover;">
                </a>
            </li>

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    .navbar {
        background-color: #fff;
        border-bottom: 1px solid #e2e2e2;
    }

    .navbar .nav-link {
        font-size: 16px;
        color: #555;
    }

    .navbar .nav-link:hover {
        color: #007bff;
    }

    .navbar .badge {
        position: absolute;
        top: -5px;
        right: -5px;
        font-size: 12px;
    }

    .navbar .form-control {
        width: 250px;
    }

    .navbar .btn-outline-primary {
        border: 1px solid #007bff;
        color: #007bff;
    }

    .navbar .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }
   .profile-img {
    width: 50px; /* Adjust width */
    height: 50px; /* Adjust height */
    object-fit: cover; /* Ensures the image maintains its aspect ratio while filling the circle */
    border-radius: 50%; /* Makes the image circular */
}

</style>

