<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h3 class="fw-bold mb-3">Edit Penduduk</h3>

<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/penduduk/update/'.$penduduk['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" value="<?= old('nik', $penduduk['nik']) ?>">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?= old('nama', $penduduk['nama']) ?>">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="L" <?= old('jenis_kelamin', $penduduk['jenis_kelamin']) == 'L' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="P" <?= old('jenis_kelamin', $penduduk['jenis_kelamin']) == 'P' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?= old('tanggal_lahir', $penduduk['tanggal_lahir']) ?>">
    </div>

    <div class="mb-3">
        <label>Dusun</label>
        <input type="text" name="dusun" class="form-control" value="<?= old('dusun', $penduduk['dusun']) ?>">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3"><?= old('alamat', $penduduk['alamat']) ?></textarea>
    </div>

    <div class="mb-3">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" value="<?= old('pekerjaan', $penduduk['pekerjaan']) ?>">
    </div>

    <div class="mb-3">
        <label>Status Keluarga</label>
        <select name="status_keluarga" class="form-control">
            <option value="Anggota" <?= old('status_keluarga', $penduduk['status_keluarga']) == 'Anggota' ? 'selected' : '' ?>>Anggota</option>
            <option value="Kepala Keluarga" <?= old('status_keluarga', $penduduk['status_keluarga']) == 'Kepala Keluarga' ? 'selected' : '' ?>>Kepala Keluarga</option>
        </select>
    </div>

    <button class="btn btn-primary">Perbarui Data</button>
    <a href="<?= base_url('admin/penduduk') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
