<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="fw-bold mb-4">Tambah Agenda Baru</h3>

  <form action="<?= base_url('admin/agenda/store') ?>" method="post" enctype="multipart/form-data" class="bg-white shadow-sm p-4 rounded">
    <div class="mb-3">
      <label class="form-label">Judul Agenda</label>
      <input type="text" name="judul" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="4"></textarea>
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Waktu</label>
        <input type="time" name="waktu" class="form-control">
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Lokasi</label>
        <input type="text" name="lokasi" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Gambar Agenda</label>
      <input type="file" name="gambar" class="form-control" accept="image/*">
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= base_url('admin/agenda') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </form>
</div>

<?= $this->endSection() ?>
