<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Tambah Layanan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card shadow mb-4">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Tambah Layanan</h4>
    </div>
    <div class="card-body">
        <form action="/service/store" method="post">
            <?= csrf_field(); ?>
            
            <!-- Nama Layanan -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Layanan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama layanan" required>
            </div>
            
            <!-- Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Deskripsi layanan"></textarea>
            </div>
            
            <!-- Harga -->
            <div class="mb-3">
                <label for="price" class="form-label">Harga (Rp) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Masukkan harga layanan" required>
            </div>
            
            <!-- Durasi -->
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi (jam) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="duration" name="duration" placeholder="Masukkan durasi layanan" required>
            </div>
            
            <!-- Kategori -->
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan kategori layanan">
            </div>
            
            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" id="status" name="status" required>
                    <option value="active">Aktif</option>
                    <option value="inactive">Nonaktif</option>
                </select>
            </div>
            
            <!-- Tombol Aksi -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="/service" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
