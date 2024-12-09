<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Add New Report</h1>

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="<?= site_url('reports/store') ?>" method="post">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="title" class="font-weight-bold">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter report title" required>
                </div>

                <div class="form-group">
                    <label for="description" class="font-weight-bold">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Enter report description"></textarea>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Save Report</button>
                    <a href="<?= site_url('reports') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
