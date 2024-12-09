<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Pengaturan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Pengaturan</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="/settings/update" method="post">
    <div class="mb-3">
        <label for="store_name" class="form-label">Nama Toko</label>
        <input type="text" class="form-control" id="store_name" name="store_name" value="<?= esc($settings[0]['value']) ?>">
    </div>
    <div class="mb-3">
        <label for="store_address" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="store_address" name="store_address" value="<?= esc($settings[1]['value']) ?>">
    </div>
    <div class="mb-3">
        <label for="store_phone" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" id="store_phone" name="store_phone" value="<?= esc($settings[2]['value']) ?>">
    </div>
    <div class="mb-3">
        <label for="business_hours" class="form-label">Jam Operasional</label>
        <input type="text" class="form-control" id="business_hours" name="business_hours" value="<?= esc($settings[3]['value']) ?>">
    </div>
    <div class="mb-3">
        <label for="currency" class="form-label">Mata Uang</label>
        <input type="text" class="form-control" id="currency" name="currency" value="<?= esc($settings[4]['value']) ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

<?= $this->endSection() ?>
