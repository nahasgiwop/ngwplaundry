<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- External CSS Libraries -->
    <link href="<?= base_url('allpublic/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('allpublic/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    
    <!-- Custom Admin Theme Styles -->
    <link href="<?= base_url('allpublic/css/ruang-admin.min.css'); ?>" rel="stylesheet">
    
    <!-- Page Title -->
    <title><?= $title ?? 'Dashboard'; ?></title>
</head>
<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('layouts/sidebar'); ?>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('layouts/topbar'); ?>
                <!-- End Topbar -->

                <!-- Main Content -->
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                </div>
                <!-- End Main Content -->
            </div>

            <!-- Footer -->
            <?= $this->include('layouts/footer'); ?>
            <!-- End Footer -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('allpublic/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('allpublic/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('allpublic/js/ruang-admin.min.js'); ?>"></script>
</body>
</html>
