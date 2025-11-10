<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="fw-bold mb-4">Edit Agenda</h3>

  <form action="<?= base_url('admin/agenda/update/'.$agenda['id']) ?>" method="post" enctype="multipart/form-data" class="bg-white shadow-sm p-4 rounded">
    <div class="mb-3">
      <label class="form-label">Judul Agenda</label>
      <input type="text" name="judul" value="<?= esc($agenda['judul']) ?>" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="4"><?= esc($agenda['deskripsi']) ?></textarea>
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" value="<?= esc($agenda['tanggal']) ?>" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Waktu</label>
        <input type="time" name="waktu" value="<?= esc($agenda['waktu']) ?>" class="form-control">
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Lokasi</label>
        <input type="text" name="lokasi" value="<?= esc($agenda['lokasi']) ?>" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Gambar Agenda</label><br>
      <?php if ($agenda['gambar']): ?>
        <img src="<?= base_url($agenda['gambar']) ?>" width="100" height="80" class="mb-2" style="object-fit:cover;border-radius:5px;">
      <?php endif; ?>
      <input type="file" name="gambar" class="form-control" accept="image/*">
      <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= base_url('admin/agenda') ?>" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-success">Perbarui</button>
    </div>
  </form>
</div>

<?= $this->endSection() ?>
