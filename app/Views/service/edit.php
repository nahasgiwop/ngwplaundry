<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Edit Layanan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card shadow mb-4">
    <div class="card-header bg-warning text-white">
        <h4 class="mb-0">Edit Layanan</h4>
    </div>
    <div class="card-body">
        <form action="/service/update/<?= $service['id']; ?>" method="post">
            <?= csrf_field(); ?>
            
            <!-- Nama Layanan -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Layanan <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="<?= esc($service['name']); ?>" required>
            </div>
            
            <!-- Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3"><?= esc($service['description']); ?></textarea>
            </div>
            
            <!-- Harga -->
            <div class="mb-3">
                <label for="price" class="form-label">Harga (Rp) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="<?= esc($service['price']); ?>" required>
            </div>
            
            <!-- Durasi -->
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi (jam) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="duration" name="duration" value="<?= esc($service['duration']); ?>" required>
            </div>
            
            <!-- Kategori -->
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="category" name="category" value="<?= esc($service['category']); ?>">
            </div>
            
            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" id="status" name="status" required>
                    <option value="active" <?= $service['status'] == 'active' ? 'selected' : ''; ?>>Aktif</option>
                    <option value="inactive" <?= $service['status'] == 'inactive' ? 'selected' : ''; ?>>Nonaktif</option>
                </select>
            </div>
            
            <!-- Diskon -->
            <div class="mb-3">
                <label for="discount" class="form-label">Diskon (%)</label>
                <input type="number" class="form-control" id="discount" name="discount" step="0.01" value="<?= esc($service['discount']); ?>">
            </div>
            
            <!-- Kapasitas -->
            <div class="mb-3">
                <label for="capacity" class="form-label">Kapasitas</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="<?= esc($service['capacity']); ?>">
            </div>
            
            <!-- Waktu Ekstra -->
            <div class="mb-3">
                <label for="extra_time" class="form-label">Waktu Ekstra (jam)</label>
                <input type="number" class="form-control" id="extra_time" name="extra_time" value="<?= esc($service['extra_time']); ?>">
            </div>
            
            <!-- Harga Ekstra -->
            <div class="mb-3">
                <label for="extra_price" class="form-label">Harga Ekstra</label>
                <input type="number" class="form-control" id="extra_price" name="extra_price" step="0.01" value="<?= esc($service['extra_price']); ?>">
            </div>
            
            <!-- Tombol Aksi -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Perbarui
                </button>
                <a href="/service" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
