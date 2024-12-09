<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Karyawan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Tambah Karyawan</h1>

<form action="/employee/store" method="post">
    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telepon</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="position" class="form-label">Posisi</label>
        <input type="text" class="form-control" id="position" name="position" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status">
            <option value="active">Aktif</option>
            <option value="inactive">Nonaktif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/employee" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
