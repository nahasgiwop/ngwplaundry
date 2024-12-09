<form action="/promotions/create" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Judul Promosi</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="discount_percent" class="form-label">Diskon (%)</label>
        <input type="number" class="form-control" id="discount_percent" name="discount_percent" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="start_date" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="mb-3">
        <label for="end_date" class="form-label">Tanggal Berakhir</label>
        <input type="date" class="form-control" id="end_date" name="end_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Promosi</button>
</form>
