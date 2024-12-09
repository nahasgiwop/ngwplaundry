<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Inventory
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Tambah Inventory</h1>

<form action="/inventory/store" method="post">
    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="mb-3">
        <label for="unit" class="form-label">Satuan</label>
        <input type="text" class="form-control" id="unit" name="unit" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('inventory') ?>" class="btn btn-secondary btn-lg ml-2">Cancel</a>

</form>

<?= $this->endSection() ?>
