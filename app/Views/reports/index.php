<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1>Reports</h1>
    <a href="<?= site_url('reports/create') ?>" class="btn btn-primary mb-3">Add New Report</a>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
                <tr>
                    <td><?= esc($report['title']) ?></td>
                    <td><?= esc($report['description']) ?></td>
                    <td>
                        <a href="<?= site_url('reports/edit/' . $report['id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('reports/delete/' . $report['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
