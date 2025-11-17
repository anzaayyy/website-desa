<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h3>Tambah APBDes</h3>

<form action="<?= base_url('admin/apbdes/store') ?>" method="post">
    <div class="mb-3">
        <label>Tahun</label>
        <input type="text" name="tahun" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Total Pendapatan</label>
        <input type="number" name="total_pendapatan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Total Belanja</label>
        <input type="number" name="total_belanja" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Total Pembiayaan</label>
        <input type="number" name="total_pembiayaan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>SILPA</label>
        <input type="number" name="silpa" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="<?= base_url('admin/apbdes') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>