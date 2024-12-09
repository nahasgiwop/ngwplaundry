<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h1>Profil Pengguna</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> <?= $user['name']; ?></p>
            <p><strong>Email:</strong> <?= $user['email']; ?></p>
            <p><strong>Nomor Telepon:</strong> <?= $user['phone']; ?></p>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
