<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2>Welcome to NGlaundry Dashboard</h2>
    <p>Manage your laundry services here.</p>

    <canvas id="incomeChart" width="400" height="200"></canvas>


</div>
<?= $this->endSection(); ?>
