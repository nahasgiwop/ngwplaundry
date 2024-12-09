<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Karyawan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Daftar Karyawan</h1>

<!-- Tombol Tambah Karyawan -->
<div class="mb-4">
    <a href="/employee/create" class="btn btn-success mb-3">
        <i class="fas fa-user-plus"></i> Tambah Karyawan
    </a>
</div>

<!-- Form Pencarian -->
<form action="/employee" method="get" class="mb-4">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Cari Karyawan..." value="<?= esc($search ?? '') ?>">
        <button type="submit" class="btn btn-outline-primary">
            <i class="fas fa-search"></i> Cari
        </button>
    </div>
</form>

<!-- Tabel Data Karyawan -->
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Posisi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $employee['id']; ?></td>
                    <td><?= esc($employee['name']); ?></td>
                    <td><?= esc($employee['email']); ?></td>
                    <td><?= esc($employee['phone']); ?></td>
                    <td><?= esc($employee['position']); ?></td>
                    <td>
                        <span class="badge <?= $employee['status'] === 'active' ? 'bg-success' : 'bg-secondary'; ?>">
                            <?= ucfirst(esc($employee['status'])); ?>
                        </span>
                    </td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/employee/edit/<?= $employee['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <!-- Tombol Hapus -->
                        <a href="/employee/delete/<?= $employee['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?');">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php elseif (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>
<!-- Paginasi -->
<div class="mt-4">
    <?= $pager->links(); ?>
</div>

<?= $this->endSection() ?>
