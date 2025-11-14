<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Edit Visi & Misi</h2>
<form action="<?= base_url('admin/visimisi/update/'.$visimisi['id_visimisi']) ?>" 
      method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label>Visi</label>
        <textarea name="visi" class="form-control"><?= esc($visimisi['visi']) ?></textarea>
    </div>

    <div class="mb-3">
        <label>Misi</label>
        <textarea name="misi" class="form-control"><?= esc($visimisi['misi']) ?></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar</label><br>
        <?php if (!empty($visimisi['gambar'])): ?>
            <img src="<?= base_url('assets/img/' . $visimisi['gambar']) ?>" width="200" class="mb-3"><br>
        <?php endif; ?>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?= $this->endSection() ?>
