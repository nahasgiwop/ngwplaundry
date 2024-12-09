<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Layanan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Daftar Layanan</h1>

<!-- Form Pencarian dan Penyaringan -->
<div class="card mb-4 animate__animated animate__fadeIn">
    <div class="card-body">
        <form action="/service" method="get" class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari Layanan..." value="<?= esc($search); ?>">
                    <button type="submit" class="btn btn-primary animate__animated animate__pulse">Cari</button>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <select name="category" class="form-select mx-2 animate__animated animate__fadeIn">
                    <option value="">Pilih Kategori</option>
                    <option value="Kategori 1" <?= $category == 'Kategori 1' ? 'selected' : ''; ?>>Kategori 1</option>
                    <option value="Kategori 2" <?= $category == 'Kategori 2' ? 'selected' : ''; ?>>Kategori 2</option>
                </select>
                <select name="status" class="form-select mx-2 animate__animated animate__fadeIn">
                    <option value="">Pilih Status</option>
                    <option value="active" <?= $status == 'active' ? 'selected' : ''; ?>>Aktif</option>
                    <option value="inactive" <?= $status == 'inactive' ? 'selected' : ''; ?>>Nonaktif</option>
                </select>
                <button type="submit" class="btn btn-primary animate__animated animate__pulse">Filter</button>
            </div>
        </form>
    </div>
</div>

<!-- Tombol Tambah -->
<a href="/service/create" class="btn btn-primary mb-3 animate__animated animate__bounce">
    <i class="fas fa-plus-circle"></i> Tambah Layanan
</a>

<!-- Card Layout untuk Data -->
<div class="row">
    <?php foreach ($services as $service): ?>
        <div class="col-md-4 mb-4 animate__animated animate__zoomIn">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($service['name']); ?></h5>
                    <p class="card-text">
                        <strong>Harga:</strong> Rp <?= number_format($service['price'], 2, ',', '.'); ?><br>
                        <strong>Kategori:</strong> <?= esc($service['category']); ?><br>
                        <strong>Status:</strong> 
                        <span class="badge <?= $service['status'] === 'active' ? 'bg-success' : 'bg-secondary'; ?>">
                            <?= ucfirst(esc($service['status'])); ?>
                        </span>
                    </p>
                    <a href="/service/edit/<?= $service['id']; ?>" class="btn btn-warning btn-sm animate__animated animate__flash">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="/service/delete/<?= $service['id']; ?>" class="btn btn-danger btn-sm animate__animated animate__shakeX" onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?');">
                        <i class="fas fa-trash-alt"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center">
    <?= $pager->links() ?>
</div>

<?= $this->endSection() ?>
