<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Tambah Pengumuman</h2>
<form action="<?= base_url('admin/pengumuman/store') ?>" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Isi</label>
    <textarea name="isi" class="form-control" required></textarea>
  </div>
  <div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control">
  </div>
  <div class="mb-3">
    <label>File Lampiran</label>
    <input type="file" name="file" class="form-control">
  </div>
  <div class="mb-3">
    <label>Tanggal Posting</label>
    <input type="date" name="tanggal_post" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Berlaku Hingga</label>
    <input type="date" name="tanggal_exp" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?= $this->endSection() ?>
