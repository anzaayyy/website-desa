<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('admin/pembangunan/update/'.$data['id']) ?>" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-8">
        <label>Nama Pembangunan</label>
        <input type="text" name="nama_pembangunan" value="<?= $data['nama_pembangunan'] ?>" class="form-control" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="<?= $data['lokasi'] ?>" class="form-control" required>

        <label>Anggaran</label>
        <input type="number" name="anggaran" value="<?= $data['anggaran'] ?>" class="form-control">

        <label>Progres (%)</label>
        <input type="number" name="progres" value="<?= $data['progres'] ?>" class="form-control">

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="4"><?= $data['deskripsi'] ?></textarea>

        <label>Meta Title</label>
        <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" class="form-control">

        <label>Meta Description</label>
        <textarea name="meta_desc" class="form-control" rows="3"><?= $data['meta_desc'] ?></textarea>
    </div>

    <div class="col-md-4">
        <label>Foto Lama</label><br>
        <img src="<?= base_url('uploads/pembangunan/'.$data['foto']) ?>" width="150" class="mb-2">
        <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">

        <label>Foto Baru</label>
        <input type="file" name="foto" class="form-control">

        <label>Alt Foto</label>
        <input type="text" name="alt_foto" value="<?= $data['alt_foto'] ?>" class="form-control">

        <button class="btn btn-primary mt-3 w-100">Update</button>
        <a href="<?= base_url('admin/pembangunan') ?>" class="btn btn-secondary">Batal</a>
    </div>
</div>
</form>

<?= $this->endSection() ?>