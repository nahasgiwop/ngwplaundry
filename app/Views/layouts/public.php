<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Public Page' ?></title>
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
            color: #5a5af5;
        }
        .navbar-nav .nav-link:hover {
            color: #5a5af5;
        }
        footer {
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">NGlaundry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-primary px-3 py-1" href="/auth/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container my-5">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; <?= date('Y') ?> <strong>NGlaundry</strong>. All Rights Reserved.</p>
            <p class="small">Built with ❤️ and Bootstrap.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
