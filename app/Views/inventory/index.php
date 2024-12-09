<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Daftar Inventory
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="mb-4 text-center">Daftar Inventory</h1>

<!-- Tombol Tambah -->
<a href="/inventory/create" class="btn btn-primary mb-3 animate__animated animate__bounce">
    <i class="fas fa-plus-circle"></i> Tambah Barang
</a>

<!-- Form Pencarian dan Penyaringan -->
<div class="card mb-4 animate__animated animate__fadeIn">
    <div class="card-body">
        <form action="/inventory" method="get" class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari Barang..." value="<?= esc($search); ?>">
                    <button type="submit" class="btn btn-primary animate__animated animate__pulse">Cari</button>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <select name="category" class="form-select mx-2 animate__animated animate__fadeIn">
                    <option value="">Pilih Kategori</option>
                    <option value="Kategori 1" <?= isset($category) && $category == 'Kategori 1' ? 'selected' : ''; ?>>Kategori 1</option>
                    <option value="Kategori 2" <?= isset($category) && $category == 'Kategori 2' ? 'selected' : ''; ?>>Kategori 2</option>
                </select>
                <select name="status" class="form-select mx-2 animate__animated animate__fadeIn">
                    <option value="">Pilih Status</option>
                    <option value="active" <?= isset($status) && $status == 'active' ? 'selected' : ''; ?>>Aktif</option>
                    <option value="inactive" <?= isset($status) && $status == 'inactive' ? 'selected' : ''; ?>>Nonaktif</option>
                </select>
                <button type="submit" class="btn btn-primary animate__animated animate__pulse">Filter</button>
            </div>
        </form>
    </div>
</div>

<!-- Card Layout untuk Data Inventory -->
<div class="row">
    <?php foreach ($inventory as $item): ?>
        <div class="col-md-4 mb-4 animate__animated animate__zoomIn">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($item['name']); ?></h5>
                    <p class="card-text">
                        <strong>Deskripsi:</strong> <?= esc($item['description']); ?><br>
                        <strong>Jumlah:</strong> <?= esc($item['quantity']); ?> <?= esc($item['unit']); ?><br>
                        <strong>Harga:</strong> Rp <?= number_format($item['price'], 2, ',', '.'); ?><br>
                        <strong>Status:</strong>
                        <?php if (isset($item['status'])): ?>
                            <span class="badge <?= $item['status'] === 'active' ? 'bg-success' : 'bg-secondary'; ?>">
                                <?= ucfirst(esc($item['status'])); ?>
                            </span>
                        <?php else: ?>
                            <span class="badge bg-secondary">Unknown</span>
                        <?php endif; ?>
                    </p>
                    <a href="/inventory/edit/<?= $item['id']; ?>" class="btn btn-warning btn-sm animate__animated animate__flash">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="/inventory/delete/<?= $item['id']; ?>" class="btn btn-danger btn-sm animate__animated animate__shakeX" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
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

<!-- Tambahkan JQuery, Popper.js, dan Bootstrap JS untuk animasi dan modals -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Custom CSS -->
<style>
    .table-responsive {
        border: 1px solid #dee2e6;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .animate__animated {
        --animate-duration: 0.5s;
    }
</style>
